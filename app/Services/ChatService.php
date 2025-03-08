<?php

namespace App\Services;

use App\Models\ChatMessage;
use Barryvdh\Debugbar\Facades\Debugbar;
use EchoLabs\Prism\Enums\Provider;
use EchoLabs\Prism\Facades\Tool;
use EchoLabs\Prism\Schema\StringSchema;
use EchoLabs\Prism\Text\Response;
use EchoLabs\Prism\Prism;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Collection;
use Exception;

class ChatService
{
    private SandboxService $sandboxService;

    public function __construct(SandboxService $sandboxService)
    {
        $this->sandboxService = $sandboxService;
    }

    public function generateAnswer(string $question, Collection $chunks, ChatMessage $chatAnswerMessage): void
    {
        $runCodeTool = Tool::as('run_code')
            ->for('Execute provided code and return stdout, stderr, files and images.')
            ->withStringParameter('code', 'The code to execute')
            ->using(function (string $code): string {
                Log::info('Run Code Tool is being called');
                $response = $this->sandboxService->runCode($code);
                Log::info(json_encode($response));
                return json_encode($response);
            });

        $graphTool = Tool::as('generate_graph_image')
            ->for('Generate a graph image from a list of edges and check its planarity.')
            ->withArrayParameter(
                'edges',
                'List of graph edges. Each edge should be provided as a JSON string, e.g. "[0,1]" or "[0,1,{\"code\":101}]".',
                new StringSchema('edge', 'A graph edge in JSON format')
            )
            ->withBooleanParameter('directed', 'Indicates if the graph is directed')
            ->using(function (array $edges, bool $directed) use ($chatAnswerMessage): string {
                $decodedEdges = array_map(
                    fn($edge) => json_decode($edge, true) ?: $edge,
                    $edges
                );
                Log::info('Graph Image Tool is being called');
                $response = $this->sandboxService->generateGraphImage($decodedEdges, $directed);
                $isPlanar = $response['is_planar'];
                Log::info(json_encode($response));
                $chatAnswerMessage->graphImageToolCalls()->create([
                    'isDirected' => $directed,
                    'edges' => $edges,
                    'isPlanar' => $isPlanar,
                    'image' => $response['image']
                ]);
                return 'The given Graph is ' . ($isPlanar ? 'not ' : '') . 'planar and is being displayed to the user.';
            });
        try {
            $context = $chunks->pluck('content')->join('---\n\n');
            $response = Prism::text()
                ->using(Provider::OpenAI, 'gpt-4o-mini')
                ->withMaxSteps(4)
                ->withSystemPrompt('Du bist ein hilfreicher Informatikexperte. Erkläre Sachverhalte faktenbasiert und nutze verfügbare Funktionen nur, wenn sie wirklich nötig sind.\n Nutze diese zusätzlichen Informationen beim beantworten der Frage: ' . $context)
                ->withPrompt('Frage: ' . $question)
                ->withTools([$runCodeTool, $graphTool])
                ->generate();
            Log::info('Complete Response Object:');
            Log::info(json_encode($response));
            Log::info('Response Text:');
            Log::info(json_encode($response->text));
            Log::info('Response Steps:');
            Log::info(json_encode($response->steps));
            Log::info('Response Messages:');
            Log::info(json_encode($response->messages));
            Log::info('Response Tool Calls:');
            Log::info(json_encode($response->toolCalls));
            Log::info('Response Tool Results:');
            Log::info(json_encode($response->toolResults));
            Log::info('Response Finish Reason:');
            Log::info(json_encode($response->finishReason));
            Log::info('Response Meta:');
            Log::info(json_encode($response->responseMeta));
            Log::info('Response Response Messages:');
            Log::info(json_encode($response->responseMessages));

            // final answer
            $chatAnswerMessage->chatAnswer()->create([
                'message' => $response->text,
                'llm' => $response->responseMeta->model,
            ]);
        } catch (Exception $e) {
            Log::error('Failed to answer question: ' . $question . ', Error: ' . $e->getMessage());
            return;
        }
    }
}
