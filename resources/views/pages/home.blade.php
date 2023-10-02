@extends('layouts.frontend.master')
@section('content')

<section class="main-home">
    <div class="main-text">
        <h5>Cari Barang Bekas</h5>
        <h1>Hanya di </h1><br>
        <h2>Loak</h2><h1>Pedia</h1><br>
        <p>5B (Barang Bekas Berasa Barang Baru)</p><br>
        <a href="/product" class="main-btn">Belanja Sekarang <i class='bx bxs-right-arrow-circle'></i></a>
    </div>

    <div class="down-arrow">
        <a href="#trending" class="down"><i class='bx bx-down-arrow-alt'></i></a>
    </div>
</section>

<!-- Iklan -->
<section class="ads-image">
    <img src="./LoakPedia/iklan.jpg" alt="">
</section>

<!-- trending-products-section -->
<section class="trending-product" id="trending">
    <div class="center-text">
        <h2>Item <span>Loak</span></h2>
    </div>

    <div class="products">
        <div class="row"> <!-- 1 -->
            <a href="/oneitem"><img src="./LoakPedia/1.jpg" alt=""></a>
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
            </div>
            <div class="price">
                <h4>Topi Medium Wanita</h4>
            </div>
        </div>

        <div class="row"> <!-- 2 -->
            <img src="./LoakPedia/2.jpg" alt="">
            <div class="product-text">
                <h5>New</h5>
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
                <h4>Celana Oren Pendek</h4>
            </div>
        </div>

        <div class="row"> <!-- 3 -->
            <img src="./LoakPedia/3.jpg" alt="">

            <div class="heart-icon">
                <i class='bx bx-heart'></i>
            </div>
            <div class="rating">
                <i class="bx bx-star"></i>
                <i class="bx bx-star"></i>
                <i class="bx bx-star"></i>
            </div>
            <div class="price">
                <h4>Kaos Pink Tipis</h4>
            </div>
        </div>

        <div class="row"> <!-- 4 -->
            <img src="./LoakPedia/4.jpg" alt="">
            <div class="product-text">
                <h5>Hot</h5>
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
                <h4>Gaun Mewah Motif Bunga</h4>
            </div>
        </div>

        <div class="row"> <!-- 5 -->
            <img src="./LoakPedia/5.jpg" alt="">

            <div class="heart-icon">
                <i class='bx bx-heart'></i>
            </div>
            <div class="rating">
                <i class="bx bx-star"></i>
                <i class="bx bx-star"></i>
            </div>
            <div class="price">
                <h4>Celana Panjang Jeans Flix Flox </h4>
            </div>
        </div>

        <div class="row"> <!-- 6 -->
            <img src="./LoakPedia/6.jpg" alt="">
            <div class="product-text">
                <h5>Hot</h5>
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
                <h4>Sepatu Naike High Heels </h4>
            </div>
        </div>
    </div>

</section>

@stop
