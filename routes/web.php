<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Log;

// Halaman Utama - Langsung memanggil view 'landing'
Route::get('/', function () {
    return view('landing');
})->name('home');

// Rute untuk form kontak
Route::post('/contact', function (Request $request) {
    // Menampilkan semua data yang dikirim dari form untuk pengecekan
    return back()->with('success', 'Pesan Anda berhasil terkirim!');
})->name('contact.send');