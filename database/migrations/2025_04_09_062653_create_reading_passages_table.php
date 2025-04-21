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
        Schema::create('reading_passages', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('topic');
            $table->enum('difficulty', ['easy', 'medium', 'hard'])->default('medium');
            $table->text('passage_text');
            $table->text('notes')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reading_passages');
    }
};
