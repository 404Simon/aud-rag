<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class ClearKnowledgeChunks extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:clear-db';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Clear pretty much all tables related to KnowledgeChunks and Chatbot.';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $tables = ['chats', 'chat_messages', 'relevant_topics', 'user_queries', 'knowledge_chunk_search_results', 'knowledge_chunks', 'chat_answers', 'graph_image_tool_calls', 'run_code_tool_calls'];

        if ($this->confirm('Are you sure you want to clear the following tables? ' . implode(', ', $tables))) {
            foreach ($tables as $table) {
                DB::table($table)->truncate();
                $this->info("Cleared table: {$table}");
            }
            $this->info('Successfully cleared tables.');
        } else {
            $this->info('Deletion cancelled.');
        }

        return 0;
    }
}
