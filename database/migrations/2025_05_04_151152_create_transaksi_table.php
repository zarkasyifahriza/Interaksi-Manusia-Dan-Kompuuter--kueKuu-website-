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
        // Tabel transaksi
        Schema::create('transaksi', function (Blueprint $table) {
            $table->id();
            $table->string('nama_pembeli');
            $table->string('alamat');
            $table->string('no_wa');
            $table->enum('jenis_pengiriman', ['delivery', 'pick_up']);
            $table->integer('total_harga')->default(0); // Kolom untuk total harga transaksi
            $table->timestamps(); // Menambahkan kolom created_at dan updated_at
        });

        // Tabel untuk hubungan antara transaksi dan produk (keranjang belanja)
        Schema::create('transaksi_produk', function (Blueprint $table) {
            $table->id();
            $table->foreignId('transaksi_id')->constrained('transaksi')->onDelete('cascade');
            $table->foreignId('produk_id')->constrained('produk')->onDelete('cascade');
            $table->integer('quantity');
            $table->integer('harga');
            $table->timestamps(); // Menambahkan kolom created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaksi_produk');
        Schema::dropIfExists('transaksi');
    }
};
