<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;

    protected $table = 'produk';  // Nama tabel yang sesuai dengan yang ada di database

    protected $fillable = [
        'nama_produk', 
        'harga', 
        'stok', 
        'deskripsi', 
        'gambar', 
        'kategori'  // Pastikan kategori juga bisa diisi
    ];

    /**
     * Relasi dengan model Transaksi melalui tabel pivot 'transaksi_produk'.
     */
    public function transaksi()
    {
        return $this->belongsToMany(Transaksi::class, 'transaksi_produk')
                    ->withPivot('quantity', 'harga')
                    ->withTimestamps();
    }
}
