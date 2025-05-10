<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('messages', function (Blueprint $table) {
            $table->id();
            $table->string('nama_lengkap');
            $table->enum('keperluan', ['Pertanyaan', 'Pemesanan', 'Lainnya']);
            $table->string('alamat_email')->nullable();
            $table->string('nomor_telepon');
            $table->text('pesan');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('messages');
    }
};