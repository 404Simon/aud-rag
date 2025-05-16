<?php

namespace App\Services;

use App\Models\KnowledgeChunk;
use Exception;
use Illuminate\Support\Facades\Log;
use Prism\Prism\Enums\Provider;
use Prism\Prism\Prism;
use Prism\Prism\Schema\BooleanSchema;
use Prism\Prism\Schema\ObjectSchema;

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
                ->asStructured()
                ->structured;

            return $response['isRelevant'];
        } catch (Exception $e) {
            Log::error('Failed to determine relevance for question: '.$question.' and chunk '.$chunk->id.'. Error: '.$e->getMessage());

            return null;
        }
    }
}
