<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('toefl_test_settings', function (Blueprint $table) {
            $table->id();
            $table->integer('listening_time')->default(35);
            $table->integer('structure_time')->default(25);
            $table->integer('reading_time')->default(55);
            $table->timestamp('last_updated')->useCurrent();
            $table->timestamps();
        });

        DB::table('toefl_test_settings')->insert([
            'listening_time' => 35,
            'structure_time' => 25,
            'reading_time' => 55,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }

    public function down(): void
    {
        Schema::dropIfExists('toefl_test_settings');
    }
};
