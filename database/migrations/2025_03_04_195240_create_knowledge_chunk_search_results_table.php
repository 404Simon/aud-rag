<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('knowledge_chunk_search_results', function (Blueprint $table) {
            $table->id();
            $table->foreignId('chat_message_id')->cascadeOnDelete();
            $table->foreignUuid('knowledge_chunk_id')->cascadeOnDelete()->constrained(
                table: 'knowledge_chunks', indexName: 'id'
            );
            $table->float('distance');
            $table->boolean('isRelevant');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('knowledge_chunk_search_results');
    }
};
