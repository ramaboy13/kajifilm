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
        Schema::create('mengulas', function (Blueprint $table) {
            $table->id('ulasanID');
            $table->foreignId('user_id')->constrained('users');
            $table->foreignId('film_id')->constrained('films');
            $table->integer('rating');
            $table->text('ulasan');
            $table->integer('nilai_cerita');
            $table->integer('nilai_audio');
            $table->integer('nilai_karakter');
            $table->integer('cinematography');
            $table->integer('ending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ulasan');
    }
};
