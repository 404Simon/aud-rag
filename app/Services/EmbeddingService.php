<?php

namespace App\Services;

use EchoLabs\Prism\Enums\Provider;
use EchoLabs\Prism\Prism;
use Illuminate\Support\Facades\Log;
use Exception;

class EmbeddingService
{
    public static function createEmbedding(string $input)
    {
        try {
            $response = Prism::embeddings()
                ->using(Provider::OpenAI, 'text-embedding-3-small')
                ->fromInput($input)
                ->generate();

            return $response->embeddings;
        } catch (Exception $e) {
            Log::error('Failed to generate embedding for input: ' . $input . '. Error: ' . $e->getMessage());
            return null;
        }
    }
}
