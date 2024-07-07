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
        Schema::create('forumdiskusis', function (Blueprint $table) {
            $table->id('diskusiID');
            $table->foreignId('userID')->constrained('users');
            $table->foreignId('adminID')->constrained('admins');
            $table->string('topik');
            $table->text('isi');
            $table->timestamp('waktu');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('forumdiskusis');
    }
};
