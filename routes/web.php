<?php

use Illuminate\Support\Facades\Route;

// Halaman Utama - Langsung memanggil view 'landing'
Route::get('/', function () {
    return view('landing');
})->name('home');

// Rute untuk form kontak (tetap diperlukan jika ada form, 
// tapi bisa dikosongkan logic-nya jika hanya fokus frontend)
Route::post('/contact', function () {
    return back()->with('success', 'Pesan terkirim!');
})->name('contact.send');