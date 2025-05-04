<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function store(Request $request)
    {
        // Validasi input
        $validated = $request->validate([
            'full_name' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
            'phone' => 'required|string|max:15',
            'shipping' => 'required|in:delivery,pickup',
        ]);

        // Simpan data ke database
        $order->full_name = $validated['full_name'];
        $order->alamat = $validated['alamat'];
        $order->phone = $validated['phone'];
        $order->shipping_method = $validated['shipping'];
        $order->save();

        // Setelah berhasil menyimpan, redirect atau tampilkan pesan sukses
        return redirect()->route('checkout.success'); // Misalnya, buat halaman sukses
    }
}
