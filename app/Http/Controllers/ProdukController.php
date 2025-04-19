<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdukController extends Controller
{
    // Menampilkan halaman daftar produk
    public function index()
    {
        $produk = [
            [
                'slug' => 'abon-mayo',
                'name' => 'Abon Mayo',
                'price' => 'Rp 11.500',
                'image' => 'img/roti/roti abon.jpg'
            ],
            [
                'slug' => 'cinamon-rolls',
                'name' => 'Cinamon Rolls',
                'price' => 'Rp 15.000',
                'image' => 'img/roti/cinnamon rools.jpg'
            ],
            [
                'slug' => 'garlic-bread',
                'name' => 'Garlic Bread',
                'price' => 'Rp 17.000',
                'image' => 'img/roti/garlic bread.jpg'
            ],
            [
                'slug' => 'pizza-bombs',
                'name' => 'Pizza Bombs',
                'price' => 'Rp 12.000',
                'image' => 'img/roti/pizza bombs.jpg'
            ],
            [
                'slug' => 'pizza-mini',
                'name' => 'Pizza Mini',
                'price' => 'Rp 15.000',
                'image' => 'img/roti/pizza mini.jpg'
            ],
            [
                'slug' => 'roti-asin',
                'name' => 'Roti Asin',
                'price' => 'Rp 13.000',
                'image' => 'img/roti/roti asin.jpg'
            ],
        ];

        return view('rotipage', ['produk' => $produk]);
    }

    // Menampilkan halaman detail produk
    public function show($slug)
    {
        $produk = [
            'abon-mayo' => [
                'name' => 'Abon Mayo',
                'price' => 'Rp 11.500',
                'image' => 'img/roti/roti abon.jpg',
                'gallery' => [
                    'img/abon.jpg',
                    'img/abon2.jpg',
                    'img/roti/roti abon.jpg'
                ],
                'description' => 'Abon Mayo adalah perpaduan unik antara gurihnya abon dan lembutnya saus mayones.'
            ],
            'cinamon-rolls' => [
                'name' => 'Cinamon Rolls',
                'price' => 'Rp 15.000',
                'image' => 'img/roti/cinnamon rools.jpg',
                'gallery' => [
                    'img/cinnamon1.jpg',
                    'img/cinnamon2.jpg',
                    'img/roti/cinnamon rools.jpg'
                ],
                'description' => 'Cinamon Rolls adalah roti gulung kayu manis yang harum dan lembut.'
            ],
            'garlic-bread' => [
                'name' => 'Garlic Bread',
                'price' => 'Rp 17.000',
                'image' => 'img/roti/garlic bread.jpg',
                'gallery' => [
                    'img/garlic1.jpg',
                    'img/garlic2.jpg',
                    'img/roti/garlic bread.jpg'
                ],
                'description' => 'Garlic Bread adalah roti dengan rasa bawang putih yang gurih dan lezat.'
            ],
            'pizza-bombs' => [
                'name' => 'Pizza Bombs',
                'price' => 'Rp 12.000',
                'image' => 'img/roti/pizza bombs.jpg',
                'gallery' => [
                    'img/pizza1.jpg',
                    'img/pizza2.jpg',
                    'img/roti/pizza bombs.jpg'
                ],
                'description' => 'Pizza Bombs adalah roti isi dengan rasa pizza yang meledak di mulut.'
            ],
            'pizza-mini' => [
                'name' => 'Pizza Mini',
                'price' => 'Rp 15.000',
                'image' => 'img/roti/pizza mini.jpg',
                'gallery' => [
                    'img/pizzamini1.jpg',
                    'img/pizzamini2.jpg',
                    'img/roti/pizza mini.jpg'
                ],
                'description' => 'Pizza Mini adalah pizza kecil yang cocok untuk camilan.'
            ],
            'roti-asin' => [
                'name' => 'Roti Asin',
                'price' => 'Rp 13.000',
                'image' => 'img/roti/roti asin.jpg',
                'gallery' => [
                    'img/asin1.jpg',
                    'img/asin2.jpg',
                    'img/roti/roti asin.jpg'
                ],
                'description' => 'Roti Asin adalah roti dengan rasa asin yang pas untuk sarapan.'
            ],
        ];

        if (!array_key_exists($slug, $produk)) {
            abort(404); // Jika produk tidak ditemukan
        }

        return view('detailproduk', ['produk' => $produk[$slug]]);
    }
}