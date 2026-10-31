
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use App\Models\Product;

// HALAMAN UTAMA PELANGGAN
Route::get('/', function () {
    return view('home');
})->name('home');

// HALAMAN KATEGORI
Route::get('/kategori', function () {
    return view('kategori');
})->name('kategori');

// HALAMAN LOGIN KHUSUS ADMIN
Route::get('/login', [AuthController::class, 'showLogin'])
    ->name('login');

// PROSES LOGIN ADMIN
Route::post('/login', [AuthController::class, 'login'])
    ->name('login.process');

// REGISTRASI (sementara dipertahankan)
Route::get('/register', [AuthController::class, 'showRegister'])
    ->name('register');

Route::post('/register', [AuthController::class, 'register'])
    ->name('register.process');

// DASHBOARD ADMIN
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth')->name('dashboard');

// LOGOUT ADMIN
Route::post('/logout', [AuthController::class, 'logout'])
    ->middleware('auth')
    ->name('logout');

// HALAMAN KATALOG PRODUK
Route::get('/produk', function () {
    $produks = Product::where('aktif', true)
        ->latest()
        ->get();

    return view('produk', compact('produks'));
})->name('produk');

// PENGELOLAAN PRODUK OLEH ADMIN
Route::middleware('auth')
    ->prefix('admin')
    ->name('admin.')
    ->group(function () {
        Route::resource('products', ProductController::class);
    });
