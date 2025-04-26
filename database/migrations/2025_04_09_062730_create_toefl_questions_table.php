<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('toefl_questions', function (Blueprint $table) {
            $table->id();
            $table->string('section'); // Listening, Structure, Reading
            $table->text('question_text');
            $table->string('option_a');
            $table->string('option_b');
            $table->string('option_c');
            $table->string('option_d');
            $table->string('correct_answer', 1); // A, B, C, or D
            $table->string('difficulty'); // Easy, Medium, Hard
            $table->text('explanation')->nullable();
            $table->text('reading_passage')->nullable();
            $table->string('audio_file')->nullable();
            $table->unsignedBigInteger('passage_id')->nullable();
            $table->foreign('passage_id')->references('id')->on('reading_passages')->onDelete('set null');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('toefl_questions');
    }
};
