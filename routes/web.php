<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\HomeController;
<<<<<<< HEAD
use App\Http\Controllers\Bahan_BakuController;
use App\Http\Controllers\PesananController;
=======
use App\Http\Controllers\BahanController;
use App\Http\Controllers\PesananController;

>>>>>>> origin
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

#Login
Route::get('/', [LoginController::class, 'Login'])->name('login');
Route::post('actionlogin', [LoginController::class, 'actionlogin'])->name('actionlogin');

#Logout
Route::get('home', [HomeController::class, 'index'])->name('home')->middleware('auth');
Route::get('actionlogout', [LoginController::class, 'actionlogout'])->name('actionlogout');

#Register
Route::get('register', [RegisterController::class, 'register'])->name('register');
Route::post('register/action', [RegisterController::class, 'actionregister'])->name('actionregister');

<<<<<<< HEAD
#Bahan baku
Route::resource('bahan', Bahan_BakuController::class);

#Pesanan
Route::resource('pesanan', PesananController::class);
=======
#CRUD Bahan baku
Route::get('bahan/tampil', [BahanController::class, 'tampilbahan'])->name('tampilbahan')->middleware('auth');
Route::get('bahan/tambah', [BahanController::class, 'tambahbahan'])->name('tambahbahan')->middleware('auth');

#CRUD Pemesanan
Route::get('pesanan/tampil', [PesananController::class, 'tampilpesanan'])->name('tampilpesanan')->middleware('auth');
Route::get('pesanan/tambah', [PesananController::class, 'tambahpesanan'])->name('tambahpesanan')->middleware('auth');
>>>>>>> origin
