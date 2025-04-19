<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KueKuu</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/produk.css') }}">
    <link rel="stylesheet" href="{{ asset('css/pastry.css') }}">
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
    <section class="background-section">
        <div class="text-section">
            <h2>Pastry</h2>
            <p>Hidup adalah kue dan cinta adalah lapisan gula di</p>
            <p>atasnya. Tanpa cinta, menjadi sulit untuk menelan</p>
            <p>kehidupan</p>
        </div>
    </section>
    <div class="container">
        <div class="produk-container">
            <div class="produk-item">
                <img src="{{ asset('img/pastry/croissant kotak.jpg') }}" alt="Roti">
                <h3>Croissant Kotak</h3>
                <h5>Rp 11.500</h5>
            </div>
            <div class="produk-item">
                <img src="{{ asset('img/pastry/croissant ori.jpg') }}" alt="Cake">
                <h3>Original Croissant</h3>
                <h5>Rp 15.000</h5>
            </div>
            <div class="produk-item">
                <img src="{{ asset('img/pastry/pistachio croissant.jpg') }}" alt="Tart">
                <h3>Pistachio Croissant</h3>
                <h5>Rp 17.000</h5>
            </div>
            <div class="produk-item">
                <img src="{{ asset('img/pastry/croissant coklat.jpg') }}" alt="Pastry">
                <h3>Croissant Coklat</h3>
                <h5>Rp 12.000</h5>
            </div>
            <div class="produk-item">
                <img src="{{ asset('img/pastry/croissant strawberry.jpg') }}" alt="Kue Kering">
                <h3>Croissant Strawberry</h3>
                <h5>Rp 15.000</h5>
            </div>
            <div class="produk-item">
                <img src="{{ asset('img/pastry/ginger bread.jpg') }}" alt="Kue Basah">
                <h3>Gingger Bread</h3>
                <h5>Rp 13.000</h5>
            </div>
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
                    <p>Hotline: 081775114422/p>
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
