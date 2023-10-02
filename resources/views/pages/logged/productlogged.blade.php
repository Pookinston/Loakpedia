@extends('layouts.frontend.masterlogged')
@section('content')

<link rel="stylesheet" href="./LoakPedia/Logged/Project_produk.css">


<section class="main-home">
<div class="main-text">
    <h5>Cari Barang Bekas</h5>
    <h1>Hanya di </h1>
    <h2>Loak</h2><h1>Pedia</h1>
    <br>
    <p>5B (Barang Bekas Berasa Barang Baru)</p>
    <br>
    <a href="/productlogged" class="main-btn">Belanja Sekarang <i class='bx bxs-right-arrow-circle'></i></a>
</div>
</section>

<!-- Iklan -->
<section class="ads-image">
<img src="./LoakPedia/Logged/iklan.jpg" alt="">
</section>

<section class="product-categories">

<div class="center-text">
    <h2> Semua<span> Kategori</span></h2>
</div>

<div class="products">
    <div class="row"> <!-- 1. Men Fashion -->
        <img src="./LoakPedia/Logged/menfashion.jpg" alt="">
        <div class="con-text">
            <h2>Fashion Pria</h2><br><br>
            <p>
                Menyediakan berbagai jenis pakaian, sepatu, topi, dasi
                ataupun aksesoris bekas lainnya untuk para pria yang
                tampil keren dan stylish.
                <a href="/mensfashionlogged">Tampilkan lebih</a>
            </p>
        </div>
    </div>

    <div class="row"> <!-- 2. PC / Games -->
        <img src="./LoakPedia/Logged/pcgame.jpg" alt="">
        <div class="con-text">
            <h2>PC / Games</h2><br>
            <p>
                Menyediakan berbagai jenis peralatan PC ataupun video games bekas.
                Untuk keperluan para gamers dan juga orang-orang yang terjun dibidang
                komputer.
                <a href="#">Tampilkan lebih</a>
            </p>
        </div>
    </div>

    <div class="row"> <!-- 3. Women Fashion -->
        <img src="./LoakPedia/Logged/3.jpg" alt="">
        <div class="con-text">
            <h2>Fashion Wanita</h2><br><br>
            <p>
                Menyediakan berbagai jenis pakaian, sepatu, topi, dasi
                ataupun aksesoris bekas lainnya untuk para wanita untuk
                selalu tampil cantik dan anggun.
                <a href="#">Tampilkan lebih</a>
            </p>
        </div>
    </div>

    <div class="row"> <!-- 4. Buku  -->
        <img src="./LoakPedia/Logged/bookstationary.jpg" alt="">
        <div class="con-text">
            <h2>Buku & Alat Tulis</h2><br>
            <p>
                Menyediakan berbagai jenis buku-buku lama (buku ilmiah, novel, dll) dengan
                berbagai genre ataupun bidang. Untuk keperluan kamu dan juga orang-orang
                yang hobi dan suka membaca buku.
                <a href="#">Tampilkan lebih</a>
            </p>
        </div>
    </div>

    <div class="row"> <!-- 5. Instrument Musik-->
        <img src="./LoakPedia/Logged/instruments.jpg" alt="">
        <div class="con-text">
            <h2>Instrument Musik</h2><br><br>
            <p>
                Menyediakan berbagai jenis alat-alat musik yang masih dapat digunakan
                dengan baik untuk kamu yang ingin masuk ke dunia musik / lagu.
                <a href="#">Tampilkan lebih</a>
            </p>
        </div>
    </div>

    <div class="row"> <!-- 6. Elektronik -->
        <img src="./LoakPedia/Logged/electronics.jpg" alt="">
        <div class="con-text">
            <h2>Elektronik</h2><br>
            <p>
                Menyediakan berbagai jenis peralatan elektronik seperti kipas angin, blender,
                dan lain sebagainya. Berguna untuk keperluan rumah tangga ataupun kegiatan lainnya.
                <a href="#">Tampilkan lebih</a>
            </p>
        </div>
    </div>

</section>

@stop
