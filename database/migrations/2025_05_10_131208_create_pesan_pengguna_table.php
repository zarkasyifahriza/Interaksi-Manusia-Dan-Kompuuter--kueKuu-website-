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
        Schema::create('pesan_pengguna', function (Blueprint $table) {
            $table->id();
            $table->string('nama_lengkap');
            $table->enum('keperluan', ['Pertanyaan', 'Pesanan', 'Lainnya']);
            $table->string('email');
            $table->string('nomor_telepon');
            $table->text('pesan')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pesan_pengguna');
    }
};
