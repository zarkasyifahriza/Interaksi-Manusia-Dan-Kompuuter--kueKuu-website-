<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KueKuu - Detail Produk</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/detailproduk.css') }}">
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
        <h1 class="page-title">Detail Produk</h1>
        <div class="product-detail">
            <div class="product-images">
                <div class="main-image">
                    @if ($gambarBase64)
                        <img src="data:image/jpeg;base64,{{ $gambarBase64 }}" alt="{{ $produk->nama_produk }}">
                    @else
                        <img src="{{ asset('img/default.png') }}" alt="Default Image">
                    @endif
                </div>
            </div>
            <div class="product-info">
                <h2>{{ $produk->nama_produk }}</h2>
                <div class="rating">
                    <span class="reviews">(25)</span>
                    <span class="stars">★★★★★</span> 
                    <span class="reviews">| Stok tersedia:{{ $produk->stok }}</span>
                </div>
                <p class="price">{{ $produk->harga }}</p>
                <p class="description"> {{ $produk->deskripsi }}</p>
                <button class="add-to-cart" onclick="showPopup()">
                    <i class="fa-solid fa-cart-shopping"></i> Tambahkan ke keranjang
                </button>
            </div>
        </div>
    </div>

    <!-- Pop-up sukses -->
    <div class="popup-overlay" id="popup-overlay"></div>
    <div class="popup-success" id="popup-success">
        <div class="popup-icon">
            <i class="fa-solid fa-check-circle"></i>
        </div>
        <div class="popup-message">
            Produk berhasil ditambahkan ke keranjang!
        </div>
        <div class="popup-actions">
            <button class="close-btn" onclick="closePopup()">Tutup</button>
            <button class="continue-btn" onclick="window.location.href='/keranjang'">Lihat Keranjang</button>
        </div>
    </div>

    <footer class="footer">
        <div class="footer-container">
            <div class="footer-logo">
                <img src="{{ asset('img/logo.png') }}" alt="KueKuu Bakery">
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
                    <p>Email: <a href="mailto:kuekuu@gmail.com">kuekuu@gmail.com</a></p>
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

    <script>
        function showPopup() {
            document.getElementById('popup-success').style.display = 'block';
            document.getElementById('popup-overlay').style.display = 'block';
        }

        function closePopup() {
            document.getElementById('popup-success').style.display = 'none';
            document.getElementById('popup-overlay').style.display = 'none';
        }
    </script>
</body>
</html>