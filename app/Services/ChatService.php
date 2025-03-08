<?php

namespace App\Services;

use EchoLabs\Prism\Enums\Provider;
use EchoLabs\Prism\Text\Response;
use EchoLabs\Prism\Prism;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Collection;
use Exception;

class ChatService
{
    public static function generateAnswer(string $question, Collection $chunks): Response
    {
        try {
            $context = $chunks->pluck('content')->join('---\n\n');
            $response = Prism::text()
                ->using(Provider::OpenAI, 'gpt-4o-mini')
                ->withSystemPrompt('Du bist ein hilfreicher Informatikexperte. Erkläre Sachverhalte faktenbasiert und nutze verfügbare Funktionen nur, wenn sie wirklich nötig sind.\n Nutze diese zusätzlichen Informationen beim beantworten der Frage: ' . $context)
                ->withPrompt('Frage: ' . $question)
                ->generate();

            return $response;
        } catch (Exception $e) {
            Log::error('Failed to answer question: ' . $question . ', Error: ' . $e->getMessage());
            return null;
        }
    }
}
