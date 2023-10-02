@extends('layouts.frontend.masterlogged')
@section('content')
<link rel="stylesheet" href="./LoakPedia/Produk_menfashion.css">

<section class="main-home">
    <div class="main-text">
        <h5>Cari Barang Bekas</h5>
        <h1>Hanya di </h1>
        <h2>Loak</h2><h1>Pedia</h1>
        <br>
        <p>5B (Barang Bekas Berasa Barang Baru)</p>
        <br>
        <a href="/produk" class="main-btn">Belanja Sekarang <i class='bx bxs-right-arrow-circle'></i></a>
    </div>
</section>

<!-- Iklan -->
<section class="ads-image">
    <img src="./LoakPedia/iklan.jpg" alt="">
</section>

<section class="men-fashions">
    <h2>Kategori : Fashion Pria</h2>
    <br><hr><br>

    <div class="title-text">
        <h2>Paling Dicari<br></h2>
    </div>

    <div class="most-popular">
        <div class="row"> <!-- 1 -->
            <img src="./LoakPedia/Sepatu.png" alt="">
            <div class="product-text">
                <h5>Sale</h5>
            </div>
            <div class="heart-icon">
                <i class='bx bx-heart'></i>
            </div>
            <div class="rating">
                <i class="bx bx-star"></i>
                <i class="bx bx-star"></i>
                <i class="bx bx-star"></i>
                <i class="bx bx-star"></i>
                <i class="bx bx-star"></i>
            </div>
            <div class="price">
                <h4>Sepatu Nikam Hitam Biru</h4>
            </div>
        </div>

        <div class="row"> <!-- 2 -->
            <img src="./LoakPedia/jeansKOYAK.png" alt="">
            <div class="product-text">
                <h5>Sale</h5>
            </div>
            <div class="heart-icon">
                <i class='bx bx-heart'></i>
            </div>
            <div class="rating">
                <i class="bx bx-star"></i>
                <i class="bx bx-star"></i>
                <i class="bx bx-star"></i>
            </div>
            <div class="price">
                <h4>Jeans Bolong Lutut</h4>
            </div>
        </div>

        <div class="row"> <!-- 3 -->
            <img src="./LoakPedia/JaketBomber.png" alt="">
            <div class="product-text">
                <h5>Sale</h5>
            </div>
            <div class="heart-icon">
                <i class='bx bx-heart'></i>
            </div>
            <div class="rating">
                <i class="bx bx-star"></i>
                <i class="bx bx-star"></i>
                <i class="bx bx-star"></i>
                <i class="bx bx-star"></i>
                <i class="bx bx-star"></i>
            </div>
            <div class="price">
                <h4>Jaket Hijau Bomber</h4>
            </div>
        </div>
    </div>

    <hr><br><br>

    <div class="title-text">
        <h2>Terbaru</h2>
    </div>

    <div class="latest-product">

        <div class="row"> <!-- 1 -->
            <img src="./LoakPedia/Handbag.png" alt="">
            <div class="product-text">
                <h5>Baru</h5>
            </div>
            <div class="heart-icon">
                <i class='bx bx-heart'></i>
            </div>
            <div class="rating">
                <i class="bx bx-star"></i>
                <i class="bx bx-star"></i>
                <i class="bx bx-star"></i>
                <i class="bx bx-star"></i>
            </div>
            <div class="price">
                <h4>Handbag Kecil Pria</h4>
            </div>
        </div>

        <div class="row"> <!-- 2 -->
            <img src="./LoakPedia/menfashion.jpg" alt="">
            <div class="product-text">
                <h5>Baru</h5>
            </div>
            <div class="heart-icon">
                <i class='bx bx-heart'></i>
            </div>
            <div class="rating">
                <i class="bx bx-star"></i>
                <i class="bx bx-star"></i>
                <i class="bx bx-star"></i>
                <i class="bx bx-star"></i>
                <i class="bx bx-star"></i>
                </div>
            <div class="price">
                <h4>Kaos B&W Lengan Panjang</h4>
            </div>
        </div>

        <div class="row"> <!-- 3 -->
            <img src="./LoakPedia/JerseyUnitedSetan.png" alt="">
            <div class="product-text">
                <h5>Baru</h5>
            </div>
            <div class="heart-icon">
                <i class='bx bx-heart'></i>
            </div>
            <div class="rating">
                <i class="bx bx-star"></i>
                <i class="bx bx-star"></i>
                <i class="bx bx-star"></i>
                <i class="bx bx-star"></i>
                <i class="bx bx-star"></i>
            </div>
            <div class="price">
                <h4>Jersey Setan United</h4>
            </div>
        </div>

    </div>

</section>

@stop
