<?php

namespace App\Services;

use App\Events\ChatUpdated;
use App\Models\ChatMessage;
use EchoLabs\Prism\Enums\Provider;
use EchoLabs\Prism\Facades\Tool;
use EchoLabs\Prism\Prism;
use EchoLabs\Prism\Schema\StringSchema;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Log;

class ChatService
{
    public function __construct(private SandboxService $sandboxService) {}

    public function generateAnswer(string $question, Collection $chunks, ChatMessage $chatAnswerMessage): void
    {
        $runCodeTool = Tool::as('run_code')
            ->for('Execute provided code and return stdout, stderr, files and images.')
            ->withStringParameter('code', 'The code to execute')
            ->using(function (string $code) use ($chatAnswerMessage): string {
                Log::info('Run Code Tool is being called');
                $response = $this->sandboxService->runCode($code);
                $stdout = $response['stdout'];
                $stderr = $response['stderr'];
                $files = $response['files'];
                $images = $response['images'];
                $chatAnswerMessage->runCodeToolCalls()->create([
                    'code' => $code,
                    'stdout' => $stdout,
                    'stderr' => $stderr,
                    'files' => $files,
                    'images' => $images,
                ]);
                ChatUpdated::dispatch($chatAnswerMessage->chat);
                Log::info(json_encode($response));

                return 'stdout: '.$stdout.'\nstderr: '.$stderr.'\nfiles: '.json_encode($files);
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
                    fn ($edge) => json_decode($edge, true) ?: $edge,
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
                    'image' => $response['image'],
                ]);
                ChatUpdated::dispatch($chatAnswerMessage->chat);

                return 'The given Graph is '.($isPlanar ? '' : 'not ').'planar and is being displayed to the user.';
            });
        $context = $chunks->pluck('content')->join('---\n\n');
        $response = Prism::text()
            ->using(Provider::OpenAI, 'gpt-4o')
            ->withMaxSteps(4)
            ->withSystemPrompt('Du bist ein hilfreicher Informatikexperte. Erkläre Sachverhalte faktenbasiert und nutze verfügbare Funktionen, wenn sie sinnvoll sind.\n Schreibe Code, um Aufgaben zu lösen!\n Nutze diese zusätzlichen Informationen beim beantworten der Frage: '.$context)
            ->withPrompt('Frage: '.$question)
            ->withTools([$runCodeTool, $graphTool])
            ->withClientOptions(['timeout' => 90])
            ->generate();

        // final answer
        $chatAnswerMessage->chatAnswer()->create([
            'message' => $response->text,
            'llm' => $response->responseMeta->model,
        ]);
        ChatUpdated::dispatch($chatAnswerMessage->chat);
    }
}
