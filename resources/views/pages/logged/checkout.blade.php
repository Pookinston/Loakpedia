<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
    <link rel="stylesheet" href="./LoakPedia/Logged/checkout.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
</head>
<body>
    <nav>
        <a href="/shopping"><i class='bx bx-arrow-back'></i></a>
        <p>&nbsp;Pemeriksaan</p>
    </nav>

    <div class="store">
        <a href="#"><i class='bx bx-store-alt'>&nbsp;Bambang</i></a>
    </div>

    <br><hr><br>

    <!-- Produk -->
    <div class="product">
        <img src="./LoakPedia/Logged/1.jpg" alt="">
        <p>Topi Medium Wanita</p>
    </div>

    <br><hr><br>

    <!-- Metode Pembayaran -->
    <div class="payment">
        <h3>Metode Pembayaran</h3>
        <div class="payment-menu">
            <div class="payment-btn">
                <span class="sBtn-text">Pilih Metode Pembayaran Anda</span>
                <i class="bx bx-chevron-down"></i>
            </div>
            <ul class="options">
                <li class="option">
                    <span class="option-text">Alfamart</span>
                </li>
                <li class="option">
                    <span class="option-text">Indomaret</span>
                </li>
                <li class="option">
                    <span class="option-text">COD / Bayar Ditempat</span>
                </li>
            </ul>
        </div>

        <script src="./LoakPedia/Logged/method.js"></script>
    </div>

    <!-- Layanan Ongkir -->
    <div class="ongkir">
        <h3>Opsi Pengiriman</h3>
        <div class="ongkir-menu">
            <div class="ongkir-btn">
                <span class="oBtn-text">Pilih Jenis Pengiriman Anda</span>
                <i class="bx bx-chevron-down"></i>
            </div>
            <ul class="opsi">
                <li class="opt">
                    <span class="opt-text">JNE</span>
                </li>
                <li class="opt">
                    <span class="opt-text">JNT</span>
                </li>
                <li class="opt">
                    <span class="opt-text">KARGO</span>
                </li>
                <li class="opt">
                    <span class="opt-text">Binus Express</span>
                </li>
                <li class="opt">
                    <span class="opt-text">Pengiriman Cepat Gratis Ongkir?</span>
                </li>
            </ul>
        </div>

        <script src="./LoakPedia/Logged/ongkir.js"></script>
    </div>

    <br><hr><br>

    <!-- Alamat dan Biodata -->
    <div class="address">
        <h3>Pengiriman</h3>
        <p>Irwan Setiadi | (+62) 876-9925-1782 | Jl. Sutera No.21, RT.6/ RW.7, Tangerang Selatan, Banten</p>
    </div>

    <br><hr><br>

    <!-- Detail Pembayaran -->
    <div class="detail">
        <h3>Detail Pembayaran</h3>

        <div class="admin"> <!--Biaya Admin -->
            <h5>Biaya Admin</h5>
            <p>Rp &nbsp;&ensp;2.000</p>
        </div>
        <div class="bongkir">
            <h5>Biaya Ongkir</h5> <!--Biaya Ongkir-->
            <p>Rp 20.000</p>
        </div>
        <div class="total"> <!--Total Biaya-->
            <h5>Total</h5>
            <p>Rp 22.000</p>
        </div>

    </div>

    <br>
    <div class="bar">
        <hr>
    </div>

    <div class="cek-button">
        <a href="/aftershopping"><button class="buy-now">Pesan</button></a>
    </div>

    <div class="ads-image">
        <img src="./LoakPedia/Logged/iklan.jpg" alt="">
    </div>

    <footer>
        <div class="foot-content">
            <div class="foot-top">
                <div class="logo-details">
                    <i class="fab fa-slack"></i>
                    <span class="logo_name">LoakPedia</span>
                </div>
                <div class="media-icons">
                    <p>Ikuti kami : </p>
                    <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                    <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
                    <a href="https://www.linkedin.com/"><i class="fab fa-linkedin"></i></a>
                    <a href="https://www.youtube.com/"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
            <div class="link-boxes">
                <ul class="box">
                    <li class="link_name">Jelajah</li>
                    <!-- <li><a href="#">Home</a></li> -->
                    <li><a href="#">Kontak Media</a></li>
                    <li><a href="#">Tentang Kami</a></li>
                    <li><a href="#">Mulai</a></li>
                </ul>
                <ul class="box">
                    <li class="link_name">Layanan</li>
                    <li><a href="#">Histori Pesanan</a></li>
                    <li><a href="#">Lacak Pesanan</a></li>
                    <li><a href="#">Diskon</a></li>
                    <li><a href="#">Pengembalian</a></li>
                </ul>
                <ul class="box">
                    <li class="link_name">Akun</li>
                    <li><a href="Project_Login.html">Profil</a></li>
                    <li><a href="Project_Login.html">Akun Saya</a></li>
                    <li><a href="#">Preferensi</a></li>
                    <li><a href="#">Biaya</a></li>
                </ul>
                <ul class="box">
                    <li class="link_name">Kategori</li>
                    <li><a href="#">Laptop dan Komputer</a></li>
                    <li><a href="#">Kamera dan Fotografi</a></li>
                    <li><a href="#">Smartphone dan Tablet</a></li>
                    <li><a href="#">Permainan Video dan Konsol</a></li>
                    <li><a href="#">Waterproof Headphone</a></li>
                </ul>
            </div>
        </div>
        <div class="bottom-details">
            <div class="bottom_text">
                <span class="copyright_text">Copyright &#169; 2023 <a href="#">LoakPedia</a>All rights reserved</span>
                <span class="policy_term">
                    <a href="#">Privacy Policy</a>
                    <a href="#">Terms & condition</a>
                </span>
            </div>
        </div>
    </footer>
</body>
</html>
