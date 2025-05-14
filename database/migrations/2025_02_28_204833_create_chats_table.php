<?php

use App\Enums\ChatMessageType;
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
        Schema::create('chats', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignId('user_id')->cascadeOnDelete();
            $table->string('title')->default('');
            $table->timestamps();
        });

        Schema::create('chat_messages', function (Blueprint $table) {
            $table->id();
            $table->foreignUuid('chat_id')->cascadeOnDelete();
            $table->enum('type', array_column(ChatMessageType::cases(), 'value'));
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('chats');
        Schema::dropIfExists('chat_messages');
    }
};
