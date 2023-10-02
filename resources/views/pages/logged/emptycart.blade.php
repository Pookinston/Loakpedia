@extends('layouts.frontend.masterlogged')
@section('content')

<link rel="stylesheet" href="./LoakPedia/Logged/EmptyCart.css">

<section class="./LoakPedia/Logged/empty-image">
    <img src="./LoakPedia/Logged/empty.jpg" alt="">
</section>

<section class="text">
    <h3>Keranjang Belanja Anda Kosong!</h3>
</section>

<form action="/homelogged">
    <div class="input-form button">
        <input type="Submit" value="Belanja Sekarang">
    </div>
</form>

@stop
