@auth
    @php
        $user = auth()->user();
    @endphp
@endauth

@extends('layouts.frontend.masterlogged')
@section('content')


<link rel="stylesheet" href="./LoakPedia/Logged/Project_profile.css">

<div class="container">
    <div class="sidebar">
        <ul>
            <li><a href="#">Daftar Transaksi</a></li>
            <li><a href="#">Obrolan</a></li>
            <li><a href="#">Masukan</a></li>
            <li><a href="#">Histori</a></li>
            <li><a href="#">Daftar Produk</a></li>
            <li><a href="#">Keamanan</a></li>
            <li><a href="#">Pengaturan</a></li>
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="logout">Keluar</button>
            </form>
        </ul>
    </div>

    <div class="content">
        <img src="./LoakPedia/Logged/ellipse_79.png" alt="">
    </div>

    <div class="biodata">
        <h4>Biodata</h4>
        <ul>
            <li>Nama          &emsp;&emsp;&emsp;&emsp;: {{ Auth::user()->name }}</li>
            <li>Tanggal Lahir &nbsp;: {{ Auth::user()->birthdate }}</li>
        </ul>
    </div>

    <div class="kontak">
        <h4>Kontak</h4>
        <ul>
            <li>Email       &emsp;&emsp;&emsp;: {{ Auth::user()->email }}</li>
            <li>No. Telepon : (+62){{ Auth::user()->phone }}</li>
        </ul>
    </div>
</div>

@stop
