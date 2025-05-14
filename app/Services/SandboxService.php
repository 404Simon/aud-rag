<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class SandboxService
{
    protected string $apiUrl = 'http://localhost:3456';

    public function runCode(string $code): array
    {
        $response = Http::timeout(10)
            ->post($this->apiUrl.'/run_code', [
                'code' => $code,
            ]);

        $response->throw();

        return $response->json();
    }

    public function generateGraphImage(array $edges, bool $directed = false): array
    {
        $response = Http::timeout(10)
            ->post($this->apiUrl.'/generate_graph_image', [
                'edges' => $edges,
                'directed' => $directed,
            ]);

        $response->throw();

        return $response->json();
    }
}
