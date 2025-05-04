<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    // Menampilkan detail produk
    public function showDetail($id)
    {
        $produk = Produk::findOrFail($id); // Mengambil produk berdasarkan ID
        
        // Mengonversi gambar biner ke Base64 jika ada gambar
        $gambarBase64 = null;
        if ($produk->gambar) {
            $gambarBase64 = base64_encode($produk->gambar); // Mengonversi gambar ke base64
        }

        // Mengirim produk dan gambar base64 ke view
        return view('detailproduk', compact('produk', 'gambarBase64'));
    }

    // Menampilkan halaman produk roti
    public function showRotiPage()
    {
        $produk = Produk::where('kategori', 'roti')->get(); // Ambil produk dengan kategori roti
        return view('rotipage', compact('produk'));
    }
    // Menampilkan halaman produk cake
    public function showCakePage()
    {
        $produk = Produk::where('kategori', 'cake')->get(); // Ambil produk dengan kategori cake
        return view('cakepage', compact('produk'));
    }
    // Menampilkan halaman produk cake
    public function showTartPage()
    {
        $produk = Produk::where('kategori', 'tart')->get(); // Ambil produk dengan kategori cake
        return view('tartpage', compact('produk'));
    }
    // Menampilkan halaman produk cake
    public function showPastryPage()
    {
        $produk = Produk::where('kategori', 'pastry')->get(); // Ambil produk dengan kategori cake
        return view('pastrypage', compact('produk'));
    }
    // Menampilkan halaman produk cake
    public function showKuekeringPage()
    {
        $produk = Produk::where('kategori', 'kuekering')->get(); // Ambil produk dengan kategori cake
        return view('kuekeringpage', compact('produk'));
    }
    // Menampilkan halaman produk cake
    public function showKuebasahPage()
    {
        $produk = Produk::where('kategori', 'kuebasah')->get(); // Ambil produk dengan kategori cake
        return view('kuebasahpage', compact('produk'));
    }

}
