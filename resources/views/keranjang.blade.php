<!-- filepath: d:\laragon\www\kueKu\resources\views\detailproduk.blade.php -->
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KueKuu</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/keranjang.css') }}">
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
    <div class="container-keranjang">
        <!-- Form Checkout -->
        <div class="checkout-form">
            <h2>Checkout</h2>
            <div class="shipping-options">
                <label><input type="radio" name="shipping" checked> Delivery</label>
                <label><input type="radio" name="shipping"> Pick up</label>
            </div>
            <div class="form-group">
                <label for="full-name">Nama lengkap</label>
                <input type="text" id="full-name" placeholder="isi nama lengkap anda">
            </div>
            <div class="form-group">
                <label for="email">Alamat Pengiriman</label>
                <input type="text" id="alamat" placeholder="isi alamat jika anda memilih delivery">
            </div>
            <div class="form-group">
                <label for="phone">Nomor WhatsApp</label>
                <input type="text" id="phone" placeholder="isi nomor WhatsApp anda">
            </div>
            <div class="checkbox">
                <input type="checkbox" id="terms">
                <label for="terms">I have read and agree to the Terms and Conditions.</label>
            </div>
        </div>
    
        <!-- Review Cart -->
        <div class="review-cart">
            <h3>Review your cart</h3>
            <div class="cart-item">
                <img src="{{ asset('img/abon.jpg') }}" alt="Product Image 1">
                <div class="cart-item-details">
                    <p>Abon Mayo</p>
                    <p>Harga: Rp 11.500</p>
                    <div class="quantity-control">
                        <button class="quantity-btn decrease" onclick="updateQuantity(this, -1)">-</button>
                        <input type="number" class="quantity-input" value="1" min="1" readonly>
                        <button class="quantity-btn increase" onclick="updateQuantity(this, 1)">+</button>
                    </div>
                </div>
                <div class="cart-item-price">Rp <span class="item-total">11.500</span></div>
            </div>
            <div class="cart-item">
                <img src="{{ asset('img/abon2.jpg') }}" alt="Product Image 2">
                <div class="cart-item-details">
                    <p>Abon Kering</p>
                    <p>Harga: Rp 11.500</p>
                    <div class="quantity-control">
                        <button class="quantity-btn decrease" onclick="updateQuantity(this, -1)">-</button>
                        <input type="number" class="quantity-input" value="1" min="1" readonly>
                        <button class="quantity-btn increase" onclick="updateQuantity(this, 1)">+</button>
                    </div>
                </div>
                <div class="cart-item-price">Rp <span class="item-total">11.500</span></div>
            </div>
            <button class="pay-now-btn">Pay Now</button>
            <p class="secure-text">Secure checkout - 100% Encrypted</p>
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
    <!-- Overlay -->
    <div class="popup-overlay" id="popup-overlay"></div>

    <!-- Pop-up sukses pembayaran -->
    <div class="popup-success" id="popup-success">
        <div class="popup-icon">
            <i class="fa-solid fa-check-circle"></i>
        </div>
        <div class="popup-message">
            Pembayaran berhasil! Terima kasih telah berbelanja di KueKuu.
        </div>
        <div class="popup-actions">
            <button class="close-btn" onclick="closePopup()">Tutup</button>
            <button class="continue-btn" onclick="window.location.href='/roti'">Lanjutkan Belanja</button>
        </div>
    </div>
</body>
</html>
<script>
    // Fungsi untuk memperbarui quantity dan total harga
    function updateQuantity(button, change) {
        const quantityInput = button.parentElement.querySelector('.quantity-input');
        const itemTotal = button.closest('.cart-item').querySelector('.item-total');
        const pricePerItem = 11500; // Harga per item (Rp)

        // Perbarui quantity
        let currentQuantity = parseInt(quantityInput.value);
        currentQuantity += change;

        // Pastikan quantity tidak kurang dari 1
        if (currentQuantity < 1) {
            currentQuantity = 1;
        }

        quantityInput.value = currentQuantity;

        // Hitung total harga untuk item ini
        const totalPrice = currentQuantity * pricePerItem;
        itemTotal.textContent = totalPrice.toLocaleString('id-ID');
    }
    function showPopup() {
        document.getElementById('popup-success').style.display = 'block';
        document.getElementById('popup-overlay').style.display = 'block';
    }

    // Fungsi untuk menutup pop-up
    function closePopup() {
        document.getElementById('popup-success').style.display = 'none';
        document.getElementById('popup-overlay').style.display = 'none';
    }

    // Tambahkan event listener ke tombol "Pay Now"
    document.querySelector('.pay-now-btn').addEventListener('click', function (e) {
        e.preventDefault(); // Mencegah aksi default tombol
        showPopup(); // Tampilkan pop-up
    });

</script>