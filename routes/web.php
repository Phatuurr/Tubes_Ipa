<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log; // Wajib ditambahkan untuk memantau error

Route::get('/', function () {
    return view('landing');
})->name('home');

Route::post('/contact', function (Request $request) {
    // 1. Validasi input dari form
    $data = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email',
        'message' => 'required',
    ]);

    try {
        // 2. Kirim Email ke gedoy.camping@gmail.com
        Mail::send([], [], function ($message) use ($data) {
            $message->to('gedoy.camping@gmail.com')
                    ->subject('Pesan Baru - Averroes Community')
                    ->html("
                        <div style='font-family: sans-serif; color: #053477;'>
                            <h2>Pesan Baru Masuk</h2>
                            <p><strong>Nama:</strong> {$data['name']}</p>
                            <p><strong>Email:</strong> {$data['email']}</p>
                            <p><strong>Pesan:</strong></p>
                            <div style='background: #f4f4f4; padding: 15px; border-left: 4px solid #FACC15;'>
                                " . nl2br(e($data['message'])) . "
                            </div>
                        </div>
                    ");
        });

        // Catat keberhasilan di storage/logs/laravel.log
        Log::info('Email berhasil dikirim ke gedoy.camping@gmail.com dari: ' . $data['email']);

        return back()->with('success', 'Terima kasih! Pesan Anda telah berhasil terkirim ke email kami.');

    } catch (\Exception $e) {
        // Jika ada kegagalan SMTP, pesan error akan tercatat di log
        Log::error('Gagal mengirim email: ' . $e->getMessage());
        
        return back()->with('error', 'Sistem gagal mengirim email. Pastikan pengaturan SMTP di file .env sudah benar.');
    }
})->name('contact.send');