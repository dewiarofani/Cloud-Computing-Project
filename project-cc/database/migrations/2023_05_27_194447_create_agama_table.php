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
        Schema::create('agama', function (Blueprint $table) {
            $table->id();
            $table->string('Kecamatan');
            $table->integer('Islam');
            $table->integer('Protestan');
            $table->integer('Katolik');
            $table->integer('Hindu');
            $table->integer('Budha');
            $table->integer('Lainnya');
            $table->softDeletes(); //ketika menghapus record data, data tidak langsung ke hapus pada server, tapi ke-hidden
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('agama');
    }
};
