<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use Exception;

class SandboxService
{
    protected string $apiUrl = 'http://localhost:3456';

    /**
     * Executes the provided code by sending it to the external API.
     *
     * @param string $code
     * @return array
     *
     * @throws Exception if the API request fails.
     */
    public function runCode(string $code): array
    {
        $response = Http::timeout(10)
            ->post($this->apiUrl . '/run_code', [
                'code' => $code,
            ]);

        $response->throw();

        return $response->json();
    }

    /**
     * Generate a graph image by sending graph data to the external API.
     *
     * @param array $edges
     * @param bool $directed
     * @return array
     * @throws Exception
     */
    public function generateGraphImage(array $edges, bool $directed = false): array
    {
        $response = Http::timeout(10)
            ->post($this->apiUrl . '/generate_graph_image', [
                'edges' => $edges,
                'directed' => $directed,
            ]);

        $response->throw();

        return $response->json();
    }
}
