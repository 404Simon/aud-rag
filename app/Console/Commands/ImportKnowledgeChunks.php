<?php

namespace App\Console\Commands;

use App\Enums\Topic;
use App\Models\KnowledgeChunk;
use App\Services\EmbeddingService;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;
use Symfony\Component\Yaml\Yaml;

class ImportKnowledgeChunks extends Command
{
    protected $signature = 'import:knowledge-chunks
                            {directory : The directory containing markdown files}
                            {topic : The topic (one of: elementare_datentypen, algorithmenbewertung_und_laufzeit, graphen_baeume, sortierung, suchen, codierung, kompression)}';

    protected $description = 'Import markdown files as KnowledgeChunks';

    public function handle()
    {
        $directory = $this->argument('directory');
        $topicInput = $this->argument('topic');

        if (!is_dir($directory)) {
            $this->error("Directory does not exist: {$directory}");
            return 1;
        }

        $topic = Topic::tryFrom($topicInput);
        if (!$topic) {
            $validTopics = implode(', ', array_map(fn($t) => $t->value, Topic::cases()));
            $this->error("Invalid topic: {$topicInput}. Valid topics are: {$validTopics}");
            return 1;
        }

        $files = File::glob($directory . '/*.md');

        if (empty($files)) {
            $this->info("No markdown files found in {$directory}");
            return 0;
        }

        foreach ($files as $file) {
            $content = File::get($file);

            if (preg_match('/^---\s*(.*?)\s*---\s*(.*)$/s', $content, $matches)) {
                $yamlContent = $matches[1];
                $markdown = $matches[2];

                try {
                    $frontmatter = Yaml::parse($yamlContent);
                } catch (\Exception $e) {
                    $this->error('Error parsing YAML in file: ' . basename($file));
                    continue;
                }
            } else {
                $this->error('No YAML frontmatter found in file: ' . basename($file));
                continue;
            }

            $embedding = EmbeddingService::createEmbedding($markdown);

            if ($embedding == null) {
                $this->error('Could not generate an embedding for file: ' . basename($file));
                continue;
            }

            KnowledgeChunk::create([
                'title' => $frontmatter['title'],
                'description' => $frontmatter['description'],
                'tags' => $frontmatter['tags'],
                'topic' => $topic,
                'content' => $markdown,
                'embedding' => $embedding,
            ]);

            $this->info('Imported: ' . basename($file));
        }
        return 0;
    }
}
