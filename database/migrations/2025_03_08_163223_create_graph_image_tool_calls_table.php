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
        Schema::create('graph_image_tool_calls', function (Blueprint $table) {
            $table->id();
            $table->foreignId('chat_message_id')->cascadeOnDelete();
            $table->boolean('isDirected');
            $table->json('edges');
            $table->boolean('isPlanar');
            $table->longText('image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('graph_image_tool_calls');
    }
};
