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
        Schema::create('membandingkan', function (Blueprint $table) {
            $table->id('bandingkanID');
            $table->foreignId('userID')->constrained('users');
            $table->foreignId('filmID')->constrained('films'); // Merujuk ke kolom id di tabel films
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('membandingkan');
    }
};
