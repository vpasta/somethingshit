<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\QRCodeController;
use App\Http\Controllers\AbsensiController;
use App\Http\Controllers\KaryawanAuthController;

Route::get('/', function () {
    return view('pages/welcomepage');
});

Route::get('/home', function () {
    return view('home');
})->middleware(['auth', 'verified'])->name('home');

Route::get('/pages/logins', function () {
    return view('pages/logins');
})->name('logins');

Route::get('/pages', function () {
    return view('pages/beranda');
})->name('beranda');

Route::get('/pages/admin', function () {
    return view('pages/adminpage');
})->name('admin');

Route::get('/pages/beranda', function () {
    return view('pages/beranda');
})->name('beranda');

Route::get('/pages/riwayat', function () {
    return view('pages/riwayat');
})->name('riwayat');

Route::get('/pages/profile', function () {
    return view('pages/profile');
})->name('profile');

Route::get('/pages/scan', function () {
    return view('pages/scan');
})->name('scan');

Route::get('/pages/absen', function () {
    return view('pages/absen');
})->name('absen');

Route::get('/admin/babsensi', function () {
    return view('admin/babsensi');
})->name('babsensi');

Route::get('/admin/cabsensi', function () {
    return view('admin/cabsensi');
})->name('cabsensi');

Route::get('/auth/karyawan-register', function () {
    return view('auth/karyawan-register');
})->name('karyawan-register');

Route::post('/pages/scan', [QRCodeController::class, 'store']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


require __DIR__.'/auth.php';

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/admin/absensi/create', [AbsensiController::class, 'create'])->name('absensi.create');
Route::post('/admin/absensi/store', [AbsensiController::class, 'store'])->name('absensi.store');

Route::get('/karyawan/register', [KaryawanAuthController::class, 'showRegisterForm'])->name('karyawan.register');
Route::post('/karyawan/register', [KaryawanAuthController::class, 'register']); 