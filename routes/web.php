<?php 

// routes/web.php
// routes/web.php

use Illuminate\Support\Facades\Route;

// ... (route lain)

Route::get('/birthday', function () {
    return view('birthday');
});

// routes/web.php

// Pastikan ini 'Controllers' (plural)
use App\Http\Controllers\BirthdayController; 

Route::post('/submit-wish', [BirthdayController::class, 'storeNilamHope'])->name('birthday.store_hope');
// Route::post('/birthday/wishes', [BirthdayController::class, 'storeNilamHope'])->name('birthday.store_hope'); // Jika menggunakan URL lama