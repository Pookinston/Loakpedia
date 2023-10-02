@extends('layouts.frontend.master')
@section('content')
<link rel="stylesheet" href="./LoakPedia/Project_registrasi.css">
<section class="form-content-regis">
    <div class="wrapper">
        <h2>Registrasi</h2>
         <form action="{{ route('regis') }}" method="POST">
            @csrf
            <div class="input-form">
                <label>Nama Lengkap</label>
                <input type="text" name="name" placeholder="Masukkan Nama Lengkap Anda" required>
            </div>
            <div class="input-form">
                <label class="special">Username</label>
                <input type="text" name="username" placeholder="Masukkan Username Anda" required>
            </div>
            <div class="input-form">
                <label>E-Mail</label>
                <input type="email" name="email" placeholder="Masukkan E-Mail Anda" required>
            </div>
            <div class="input-form">
                <label>No. Telepon</label>
                <input type="tel" name="phone" placeholder="Masukkan No. Telepon Anda (cth. 0895-8883-6152)" pattern="08[0-9]{2}-[0-9]{4}-[0-9]{4}" required>
            </div>
            <div class="input-form">
                <label>Tanggal Lahir</label>
                <input type="date" name="birthdate" required>
            </div>
            <div class="input-form">
                <label>Kata Sandi</label>
                <input type="password" name="password" minlength="6" maxlength="10" placeholder="Buatlah kata sandi Anda (6-10 karakter)" required>
            </div>
            <div class="input-form">
                <label>Konfirmasi</label>
                <input type="password" name="password_confirmation" minlength="6" maxlength="10" placeholder="Konfirmasikan kata sandi Anda (6-10 karakter)" required>
            </div>
            <div class="policy">
                <input type="checkbox" name="terms" required>
                <h3>Saya menyetujui <a href="#">Syarat & Ketentuan</a> yang berlaku</h3>
            </div>
            <div class="input-form button">
                <a href="/home"><input type="submit" value="Daftar Sekarang"></a>
            </div>
            <div class="text">
                <h3>Sudah memiliki akun? <a href="/login">Masuk Sekarang</a></h3>
            </div>
        </form>
    </div>
</section>
@stop
