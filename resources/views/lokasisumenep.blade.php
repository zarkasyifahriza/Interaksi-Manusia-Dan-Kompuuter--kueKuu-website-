<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KueKuu</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/lokasi.css') }}">
</head>
<body>
    <div class="navbar">
        <div class="nav-left">
            <a href="/tentang-kami">TENTANG KAMI</a>
            <a href="/produk">PRODUK</a>
            <a href="/lokasibangkalan">LOKASI <i class="fa-solid fa-chevron-down"></i></a>
            <a href="/keranjang"><i class="fa-solid fa-cart-shopping"></i></a>
        </div>
        <div class="logo">
            <img src="{{ asset('img/logo.png') }}" alt="logo">
        </div>
        <div class="nav-right">
            <a href="#" class="contact">HUBUNGI KAMI</a>
            <span>|</span>
            <a href="#"><i class="fa-solid fa-phone"></i> 081775114422</a>
            <a href="#"><i class="fa-brands fa-instagram"></i></a>
            <a href="#"><i class="fa-brands fa-facebook"></i></a>
        </div>
    </div>
    <div class="container">
        <div class="lokasi-BANGKALAN">
            <div class="text-wrapper-5">Lokasi Gerai Kami</div>
            <p class="p">Lokasi gerai kami tersebar di 4 lokasi</p>
            <div class="overlap-group">
                <div class="text-wrapper-20"><a href="/lokasibangkalan">BANGKALAN</a></div>
            </div>
            <div class="text-wrapper-21"><a href="/lokasisampang">PAMEKASAN</a></div>
            <div class="text-wrapper-22"><a href="/lokasipamekasan">PAMEKASAN</a></div>
            <div class="text-wrapper-23">
                <a href="/lokasisumenep">SUMENEP</a>
                <img class="line-2" src="img/line 4.png" />
            </div>
            <div class="text-wrapper-24">GERAI KAMI</div>
            <div class="text-wrapper-25">KueKuu Sumenep</div>
            <div class="text-wrapper-26">Jam Buka</div>
            <div class="text-wrapper-27">Alamat</div>
            <div class="text-wrapper-28sampang">Jl.Trunojoyo No.19, Kab.Sampang</div>
            <img class="line-3" src="{{ asset('img/line 4.png') }}"/>
            <img class="line-4" src="{{ asset('img/line 5.png') }}"/>
            <div class="overlap">
                <img class="line-5" src="{{ asset('img/line 7.png') }}" />
            </div>
            <img class="line-6" src="{{ asset('img/line 8.png') }}"/>
            <div class="text-wrapper-29">Nomor Telepon:</div>
            <div class="text-wrapper-30">+6281775114423</div>
            <div class="text-wrapper-31">Senin - Minggu</div>
            <div class="text-wrapper-32">07:00 - 22:00 WIB</div>
            <img class="kuekuu" src="{{ asset('img/kuekuu 1.png') }}"/>
            <img class="interior-toko" src="{{ asset('img/interior toko.png') }}"/>
            <img class="maps" src="img/maps.png" />
        </div>
    </div>
    <footer class="footer">
        <div class="footer-container">
            <div class="footer-logo">
                <img src="{{ asset('img/logo.png') }}" alt="Anita Family Bakery">
                <h2>KUEKUU BAKERY</h2>
            </div>
            <div class="footer-links">
                <div>
                    <h3>NAVIGASI</h3>
                    <ul>
                        <li><a href="/tentang-kami">Tentang Kami</a></li>
                        <li><a href="/lokasibangkalan">Lokasi Gerai</a></li>
                        <li><a href="#">Hubungi Kami</a></li>
                    </ul>
                </div>
                <div>
                    <h3>PRODUK</h3>
                    <ul>
                        <li><a href="#">Roti</a></li>
                        <li><a href="#">Cakes</a></li>
                        <li><a href="#">Tart</a></li>
                        <li><a href="#">Pastry</a></li>
                        <li><a href="#">Kue Kering</a></li>
                        <li><a href="#">Kue Basah</a></li>
                    </ul>
                </div>
                <div>
                    <h3>HUBUNGI KAMI</h3>
                    <p>Email: <a href="mailto:hotline@anitafamily.co.id">kuekuu@gmail.com</a></p>
                    <p>Hotline: 081775114422</p>
                </div>
                <div>
                    <h3>IKUTI KAMI</h3>
                    <div class="social-icons">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-facebook"></i></a>
                        <a href="#"><i class="fab fa-whatsapp"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <p>© 2025 KueKuu — All Rights Reserved</p>
        </div>
    </footer>
</body>
</html>