<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Auth\AuthenticatedSessionController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/home', function () {
    return view('pages.home');
});

Route::get('/product', function () {
    return view('pages.product');
});

Route::get('/notifikasi', function () {
    return view('pages.notifikasi');
});

Route::get('/login', function () {
    return view('pages.login');
});

Route::get('/oneitem', function () {
    return view('pages.oneitem');
});

Route::get('/menfashion', function () {
    return view('pages.menfashion');
});

Route::get('/oneitemlogged', function () {
    return view('pages.logged.oneitemlogged');
});

Route::get('/mensfashionlogged', function () {
    return view('pages.logged.mensfashionlogged');
});

Route::get('/shopping', function () {
    return view('pages.logged.shopping');
});

Route::get('/checkout', function () {
    return view('pages.logged.checkout');
});

Route::get('/aftershopping', function () {
    return view('pages.logged.aftershopping');
});

Route::get('/emptycart', function () {
    return view('pages.logged.emptycart');
});

Route::get('/toko', function () {
    return view('pages.logged.toko');
});

Route::get('/supplier', function () {
    return view('pages.supplier.supplier');
});

Route::get('/upload', function () {
    return view('pages.supplier.upload');
});

Route::get('/supplierfilled', function () {
    return view('pages.supplier.supplierfilled');
});

Route::get('/supplier_product_filled', function () {
    return view('pages.supplier.supplier_product_filled');
});

Route::get('/order', function () {
    return view('pages.supplier.supplierorder');
});

Route::post('/login', [AuthenticatedSessionController::class, 'login'])->name('login');
Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');

Route::get('/regis', function () {
    return view('pages.regis');
});

Route::get('/profilepage', function () {
    return view('pages.logged.profile');
});

Route::get('/regis', [RegisteredUserController::class, 'create'])->name('regis');
Route::post('/regis', [RegisteredUserController::class, 'store'])->name('regis.store');


Route::get('/homelogged', function () {
    return view('pages.logged.homelogged');
})->name('homelogged');

Route::get('/productlogged', function () {
    return view('pages.logged.productlogged');
});

Route::get('/profile', [Controller::class, 'profile'])->name('profile');
