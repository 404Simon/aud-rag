<?php

namespace App\Services;

use EchoLabs\Prism\Enums\Provider;
use EchoLabs\Prism\Prism;
use Exception;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class EmbeddingService
{
    private static function getStoragePath(string $key): string
    {
        return 'embeddings/'.$key.'.json';
    }

    private static function embeddingExists(string $key): bool
    {
        return Storage::disk('local')->exists(self::getStoragePath($key));
    }

    private static function loadEmbedding(string $key): ?array
    {
        try {
            $content = Storage::disk('local')->get(self::getStoragePath($key));

            return json_decode($content, true);
        } catch (Exception $e) {
            Log::error('Failed to load embedding for key: '.$key.'. Error: '.$e->getMessage());

            return null;
        }
    }

    private static function saveEmbedding(string $key, array $embedding): bool
    {
        try {
            $content = json_encode($embedding);
            Storage::disk('local')->put(self::getStoragePath($key), $content);

            return true;
        } catch (Exception $e) {
            Log::error('Failed to save embedding for key: '.$key.'. Error: '.$e->getMessage());

            return false;
        }
    }

    public static function createEmbedding(string $input): ?array
    {
        $key = md5($input);

        if (self::embeddingExists($key)) {
            return self::loadEmbedding($key);
        }

        try {
            $response = Prism::embeddings()
                ->using(Provider::OpenAI, 'text-embedding-3-small')
                ->fromInput($input)
                ->generate();

            $embedding = $response->embeddings;

            if ($embedding && self::saveEmbedding($key, $embedding)) {
                Log::info('Generated and saved embedding for input: '.$input);

                return $embedding;
            } else {
                Log::error('Failed to save generated embedding for input: '.$input);

                return null;
            }
        } catch (Exception $e) {
            Log::error('Failed to generate embedding for input: '.$input.'. Error: '.$e->getMessage());

            return null;
        }
    }
}
