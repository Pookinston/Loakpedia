@extends('layouts.frontend.master')
@section('content')
<link rel="stylesheet" href="./LoakPedia/Project_login.css">

<section class="form-content">
    <div class="wrapper">
        <h2>Login</h2>
        <form action="{{ route('login') }}" method="POST">
            @csrf
            <div class="input-form">
                <label class="special">Username</label>
                <input type="text" name="username" placeholder="Masukkan Username Anda" required>
                @error('login_failed')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>
            <div class="input-form">
                <label>Kata Sandi</label>
                <input type="password" name="password" minlength="6" maxlength="10" placeholder="Masukan kata sandi Anda (6-10 karakter)" required>
            </div>
            <div class="text">
                <h3><a href="/regis">Lupa Kata Sandi?</a></h3>
            </div>
            <div class="input-form button">
                <a href="/home"><input type="submit" value="Masuk">
            </div>
            <div class="text">
                <h3 class="belum">Belum memiliki akun? <a href="/regis">Registrasi Sekarang</a></h3>
            </div>
        </form>
    </div>
</section>
@stop
