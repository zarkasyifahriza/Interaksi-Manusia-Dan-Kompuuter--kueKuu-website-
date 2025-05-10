<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PesanPengguna;

class PesanPenggunaController extends Controller
{
    public function store(Request $request)
    {
        // Validasi data input
        $validatedData = $request->validate([
            'nama_lengkap'    => 'required|string|max:100',
            'keperluan'       => 'required|in:Pertanyaan,Pesanan,Lainnya',
            'email'           => 'required|email',
            'nomor_telepon'   => 'required|string|max:20',
            'pesan'           => 'nullable|string',
        ]);

        // Simpan data ke database secara aman
        PesanPengguna::create($validatedData);

        // Kembali ke halaman sebelumnya dengan notifikasi sukses
        return back()->with('success', 'Pesan Anda berhasil dikirim!');
    }
}
