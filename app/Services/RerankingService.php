<?php

namespace App\Services;

use App\Models\KnowledgeChunk;
use EchoLabs\Prism\Enums\Provider;
use EchoLabs\Prism\Prism;
use EchoLabs\Prism\Schema\BooleanSchema;
use EchoLabs\Prism\Schema\ObjectSchema;
use Exception;
use Illuminate\Support\Facades\Log;

class RerankingService
{
    public static function isRelevant(string $question, KnowledgeChunk $chunk)
    {
        $schema = new ObjectSchema(
            name: 'Relevance',
            description: 'Determins, if the text is useful to answer the given question.',
            properties: [
                new BooleanSchema('isRelevant', 'Is the text useful to answer the given question?', false),
            ],
        );

        try {
            $response = Prism::structured()
                ->using(Provider::OpenAI, 'gpt-4o-mini')
                ->withSchema($schema)
                ->withPrompt('Question: '.$question.', Text: '.$chunk->content)
                ->generate()
                ->structured;

            return $response['isRelevant'];
        } catch (Exception $e) {
            Log::error('Failed to determine relevance for question: '.$question.' and chunk '.$chunk->id.'. Error: '.$e->getMessage());

            return null;
        }
    }
}
