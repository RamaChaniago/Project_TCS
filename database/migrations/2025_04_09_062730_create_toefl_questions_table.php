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
        Schema::create('toefl_questions', function (Blueprint $table) {
            $table->id();
            $table->enum('section', ['listening', 'structure', 'reading']);
            
            // Fields for all question types
            $table->text('question_text');
            $table->string('option_a');
            $table->string('option_b');
            $table->string('option_c');
            $table->string('option_d');
            $table->enum('correct_answer', ['A', 'B', 'C', 'D']);
            $table->enum('difficulty', ['easy', 'medium', 'hard'])->default('medium');
            $table->text('notes')->nullable();
            
            // Listening section specific fields
            $table->enum('listening_part', ['A', 'B', 'C'])->nullable();
            $table->string('audio_file')->nullable();
            
            // Structure section specific fields
            $table->enum('structure_type', ['structure', 'written'])->nullable();
            
            // Reading section specific fields
            $table->foreignId('reading_passage_id')->nullable()
                  ->references('id')->on('reading_passages')
                  ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('toefl_questions');
    }
};
