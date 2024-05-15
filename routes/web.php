<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
Route::get('/', function () {
    return view('welcome');
});

/**
 * Method HTTP:
 * 1. GET = menampilkan halaman
 * 2. Post = mengirim data
 * 3. Put = meng-update data
 * 4. Delete = menghapus data
 */

// route untuk menampilkan text
Route::get('/salam/{nama}', function($nama){
    return "Assalaamualaikum $nama";
});

Route::get('admin/dashboard', [DashboardController::class, 'index']);