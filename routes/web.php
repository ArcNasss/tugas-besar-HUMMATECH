<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PembeliController;
use App\Http\Controllers\SuplierController;
use App\Http\Controllers\pembelianController;
use App\Http\Controllers\KategoriController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;


Route::get('/', function () {
    return view('layouts.app');
})->name('dashboard');

Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register')->middleware('guest');
Route::post('/register', [AuthController::class, 'register'])->name('register.post');
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::resource('pembelis', PembeliController::class);


Route::resource('supliers', SuplierController::class);



Route::resource('kategoris', KategoriController::class);

Route::resource('barangs', BarangController::class);



Route::resource('pembelians', PembelianController::class);

use App\Http\Controllers\PenjualanController;

Route::resource('penjualans', PenjualanController::class);

use App\Http\Controllers\DetailPenjualanController;

Route::resource('detail-penjualans', DetailPenjualanController::class);
