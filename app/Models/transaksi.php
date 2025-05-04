<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;

    // Nama tabel jika berbeda dari plural nama model
    protected $table = 'transaksi_produk'; // Tabel pivot atau tabel transaksi

    // Kolom yang dapat diisi (mass assignment)
    protected $fillable = [
        'transaksi_id',
        'produk_id',
        'quantity',
        'harga',
    ];

    /**
     * Relasi dengan model Transaksi
     * Jika Anda memiliki model Transaksi yang terpisah untuk transaksi utama, pastikan relasinya benar.
     */
    public function transaksi()
    {
        return $this->belongsTo(Transaksi::class, 'transaksi_id', 'id');
    }

    /**
     * Relasi dengan model Produk
     */
    public function produk()
    {
        return $this->belongsTo(Produk::class, 'produk_id', 'id');
    }
}
