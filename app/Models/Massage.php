<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_lengkap',
        'keperluan',
        'alamat_email',
        'nomor_telepon',
        'pesan'
    ];
}