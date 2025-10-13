<?php

namespace App\Http\Controllers;

use App\Models\Hope; 
use Illuminate\Http\Request;
use Illuminate\Routing\Controller; // <-- AKTIFKAN INI

class BirthdayController extends Controller // <-- GANTI DARI 'Controllers' JADI 'Controller'
{
    // ... method-method lain Anda ...

    public function storeNilamHope(Request $request)
    {
        // 1. Validasi input
        $request->validate([
            'content' => 'required|string|max:2000',
        ]);

        // 2. Simpan ke database menggunakan Model Hope
        Hope::create([
            'sender_name' => 'Nilam Sahfa (Rahasia)', // Nilai hardcoded untuk identifikasi
            'content' => $request->content,
            'is_private' => 1, // Flag untuk menandakan harapan ini rahasia
        ]);

        // 3. Redirect kembali dengan pesan sukses
        return redirect()->back()->with('success', 'Harapanmu berhasil tersimpan di database rahasia Sli!');
    }
}
