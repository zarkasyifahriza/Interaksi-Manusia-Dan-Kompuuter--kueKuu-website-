<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KueKuu</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
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

    <div class="slideshow-container">
        <img class="slides fade" src="{{ asset('img/kue1.png') }}" alt="Roti 1">
        <img class="slides fade" src="{{ asset('img/kue2.png') }}" alt="Roti 2">
        <img class="slides fade" src="{{ asset('img/kue3.png') }}" alt="Roti 3">
    </div>
    <div class="container">
        <img src="{{ asset('img/logo.png') }}" alt="logo">
        <h2 class="since">SINCE 2025</h2>
        <p class="description">
            KueKuu Bakery hadir untuk menghadirkan kelezatan dalam setiap gigitan. Berawal dari kecintaan terhadap seni baking, 
            kami berkomitmen untuk menyajikan kue dan roti berkualitas tinggi dengan bahan-bahan premium dan proses pembuatan yang higienis.
        </p>
        <p class="description">
            Setiap produk yang kami buat selalu fresh setiap hari, mengutamakan cita rasa, tekstur, dan tampilan yang menggugah selera. 
            Dari roti lembut hingga kue spesial untuk berbagai acara, KueKuu Bakery siap menjadi bagian dari setiap momen istimewa Anda.
        </p>
        <p class="description">
            Nikmati kehangatan dan kebahagiaan dalam setiap kreasi kami, 
            karena bagi kami, kue yang dibuat dengan hati akan membawa kebahagiaan bagi siapa saja yang menikmatinya.
        </p>
        <p class="love-message">Karena Cinta Kami Membuatnya</p>
        <h3 class="slogan">We love it so we make it</h3>
        {{-- Special Produk --}}
        <section class="special-product">
            <img src="{{ asset('img/kue1.png') }}" alt="Coklat Wijen" class="product-image">
            <div class="special-product-content">
                <p class="tagline">PRODUK SPESIAL KAMI</p>
                <h2 class="product-title">Coklat Wijen</h2>
                <p class="product-description">Roti Spesial dengan isi coklat premium dan taburan wijen</p>
                <a href="/produk" class="product-button">LIHAT SEMUA PRODUK →</a>
            </div>
        </section>
        {{-- Varian Produk --}}
        <section class="varian-produk">
            <p class="sub-title">VARIAN PRODUK KAMI</p>
            <h2 class="title">Berbagai Varian Produk Spesial</h2>
            <p class="description">Diproduksi oleh Tenaga Ahli yang Berkomitmen Terhadap Kualitas Produk</p>
            
            <div class="produk-container">
                <div class="produk-item">
                    <a href="/roti">
                        <img src="{{ asset('img/kue1.png') }}" alt="Roti">                   
                    </a>
                    <p>Roti</p>
                </div>
                <div class="produk-item">
                    <a href="/cake">
                        <img src="{{ asset('img/kue2.png') }}" alt="Roti">                   
                    </a>
                    <p>Cake</p>
                </div>
                <div class="produk-item">
                    <a href="/tart">
                        <img src="{{ asset('img/kue3.png') }}" alt="Roti">                   
                    </a>
                    <p>Tart</p>
                </div>
            </div>
    
            <div class="lihat-produk">
                <a href="/produk">LIHAT SEMUA PRODUK →</a>
            </div>
        </section>
        <div class="contact-container">
            <div class="contact-box">
                <div class="contact-image">
                    <img src="{{ asset('img/interior.png') }}" alt="Anita Family Bakery">
                </div>
                <div class="contact-form">
                    <h2>Sampaikan Pesan Anda</h2>
                    <p>Anda dapat menyampaikan pertanyaan atau pesanan khusus kepada kami. Silakan hubungi kami dengan mengisi formulir di bawah ini:</p>
                    <!-- Menampilkan pesan sukses jika ada -->
                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    <form action="{{ route('pesan.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="nama">Nama Lengkap*</label>
                            <input type="text" id="nama" name="nama_lengkap" placeholder="Nama Anda" required>
                            @error('nama_lengkap')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    
                        <div class="form-group">
                            <label for="keperluan">Keperluan</label>
                            <select id="keperluan" name="keperluan" required>
                                <option value="Pertanyaan">Pertanyaan</option>
                                <option value="Pesanan">Pesanan</option>
                                <option value="Lainnya">Lainnya</option>
                            </select>
                        </div>
                    
                        <div class="form-group">
                            <label for="email">Alamat Email*</label>
                            <input type="email" id="email" name="email" placeholder="Masukkan Alamat Email" required>
                            @error('email')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    
                        <div class="form-group">
                            <label for="nomor">Nomor Telepon*</label>
                            <input type="text" id="nomor" name="nomor_telepon" placeholder="Masukkan Nomor Telepon" required>
                            @error('nomor_telepon')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    
                        <div class="form-group">
                            <label for="pesan">Pesan</label>
                            <textarea id="pesan" name="pesan" placeholder="Tulis Pesan"></textarea>
                        </div>
                        <button type="submit" class="btn">Kirim Pesan</button>
                    </form>
                                      
                </div>
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

    <script>
        let slideIndex = 0;
        function showSlides() {
            let slides = document.getElementsByClassName("slides");
            for (let i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            slideIndex++;
            if (slideIndex > slides.length) { slideIndex = 1; }
            slides[slideIndex - 1].style.display = "block";
            setTimeout(showSlides, 3000);
        }
        showSlides();
        
    </script>
</body>
</html>
