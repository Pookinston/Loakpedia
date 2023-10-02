@extends('layouts.frontend.masterlogged')
@section('content')
<link rel="stylesheet" href="./LoakPedia/Logged/shopping.css">

<div class="cek-toko">
    <!-- 1. Checkbox -->
    <div class="sections">
        <input type="checkbox">
    </div>

    <!-- 2. Nama Toko -->
    <div class="sections">
        <a href="#"><i class='bx bx-store-alt'>&nbsp;Bambang</i></a>
    </div>
</div>

<br><hr>

<div class="cek-barang">

    <!-- 1. Checkbox -->
    <div class="section">
        <input type="checkbox">
    </div>

    <!-- 2. Gambar Produk -->
    <div class="section">
        <img src="./LoakPedia/Logged/1.jpg" alt="">
    </div>

    <!-- 3. Nama Produk -->
    <div class="section">
        <p>Topi Medium Wanita</p>
    </div>

    <!-- 4. Kuantitas -->
    <div class="section">
        <span class="minus">-</span>
        <p>|</p>
        <span class="num">01</span>
        <p>|</p>
        <span class="plus">+</span>

        <script>
            const plus = document.querySelector(".plus"),
             minus = document.querySelector(".minus"),
             num = document.querySelector(".num");

             let a = 1;

             plus.addEventListener("click", ()=>{
                if(a < 2){ /* karena produk hanya tersisa 2, maka dibikin limit 2 */
                    a++;
                    a = (a < 10) ? "0" + a : a;
                    num.innerText = a;
                }
             });

             minus.addEventListener("click", ()=>{
                if(a > 1){
                    a--;
                    a = (a < 10) ? "0" + a : a;
                    num.innerText = a;
                }
             });

        </script>
    </div>

    <!-- 5. Hapus -->
    <div class="section">
        <a href="Empty_Cart.html"><i class='bx bx-trash'>&nbsp;Hapus</i></a>
    </div>
</div>

<br>
<div class="bar">
    <hr>
</div>

<div class="cek-button">
    <a href="/checkout"><button class="buy-now">Periksa</button></a>
</div>

<div class="ads-image">
    <img src="./LoakPedia/Logged/iklan.jpg" alt="">
</div>

@stop
