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
        Schema::create('relevant_topics', function (Blueprint $table) {
            $table->id();
            $table->foreignId('chat_message_id')->cascadeOnDelete();
            $table->boolean('elementare_datentypen')->default(false);
            $table->boolean('algorithmenbewertung_und_laufzeit')->default(false);
            $table->boolean('graphen_baeume')->default(false);
            $table->boolean('sortierung')->default(false);
            $table->boolean('suchen')->default(false);
            $table->boolean('codierung')->default(false);
            $table->boolean('kompression')->default(false);
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
