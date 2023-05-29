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
        Schema::create('usia', function (Blueprint $table) {
            $table->id();
            $table->string('Kelompok Usia');
            $table->integer('Laki-Laki');
            $table->integer('Perempuan');
            $table->integer('Jumlah');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usia');
    }
};
