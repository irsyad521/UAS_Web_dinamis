<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\BahasaController;
use Illuminate\Support\Facades\Route;

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

// Dashboard
Route::get('/', [BahasaController::class, 'index']);
// Menampilkan halaman dashboard.

Route::get('/bahasa/{id}', [BahasaController::class, 'detail']);
// Menampilkan detail film berdasarkan ID.

// CRUD Movie
Route::get('/bahasas/data', [BahasaController::class, 'data'])->middleware('auth');
// Memerlukan otentikasi untuk membaca data film.

Route::get('/bahasas/create', [BahasaController::class, 'create'])->middleware('auth');
// Memerlukan otentikasi untuk menampilkan halaman pembuatan film.

Route::post('/bahasa/store', [BahasaController::class, 'store'])->middleware('auth');
// Memerlukan otentikasi untuk menyimpan data film baru.

Route::get('/bahasa/{id}/edit', [BahasaController::class, 'edit'])->middleware('auth');
// Memerlukan otentikasi untuk menampilkan halaman pengeditan film berdasarkan ID.

Route::post('/bahasa/{id}/edit', [BahasaController::class, 'update'])->middleware('auth');
// Memerlukan otentikasi untuk menyimpan perubahan pada data film berdasarkan ID.

Route::get('/bahasa/delete/{id}', [BahasaController::class, 'delete'])->middleware('auth');
// Memerlukan otentikasi untuk menghapus data film berdasarkan ID.

// Login
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login')->middleware('guest');
// Menampilkan formulir login, hanya dapat diakses oleh tamu.
// Memberikan nama 'login' pada rute untuk referensi lebih mudah.
// Memerlukan pengguna untuk menjadi tamu (belum login).

Route::post('/login', [LoginController::class, 'authenticate']);
// Memproses permintaan login.

Route::post('/logout', [LoginController::class, 'logout']);
// Memproses permintaan logout.
