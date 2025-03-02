<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('relevant_topics', function (Blueprint $table) {
            $table->id();
            $table->foreignId('chat_message_id')->cascadeOnDelete();
            $table->boolean('elementare_datentypen');
            $table->boolean('algorithmenbewertung_und_laufzeit');
            $table->boolean('graphen_baeume');
            $table->boolean('sortierung');
            $table->boolean('suchen');
            $table->boolean('codierung');
            $table->boolean('kompression');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('relevant_topics');
    }
};
