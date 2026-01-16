<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index()
    {
        return view('landing'); // Memanggil resources/views/landing.blade.php
    }

    public function sendContact(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        return back()->with('success', 'Pesan Anda telah terkirim!');
    }
}