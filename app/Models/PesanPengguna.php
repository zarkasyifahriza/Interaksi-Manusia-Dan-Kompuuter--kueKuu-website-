<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PesanPengguna extends Model
{
    protected $table = 'pesan_pengguna';

    // app/Models/PesanPengguna.php
    protected $fillable = [
        'nama_lengkap',
        'keperluan',
        'email',
        'nomor_telepon',
        'pesan'
    ];

}
