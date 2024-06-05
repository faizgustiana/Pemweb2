<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\StudentController;
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
Route::get('/salam/{nama}', function ($nama) {
    return "Assalaamualaikum $nama";
});

Route::get('admin/dashboard', [DashboardController::class, 'index']);

// Route untuk menambahkan student
Route::get('admin/student', [StudentController::class, 'index']);

// Route untuk menampilkan form tambah student
Route::get('admin/student/create', [StudentController::class, 'create']);

// Route untuk mengirim data student
Route::post('admin/student/store', [StudentController::class, 'store']);

// Route untuk menampilkan halaman edit student
Route::get('admin/student/edit/{id}', [StudentController::class, 'edit']);

// Route untuk menyimpan hasil updete student
Route::put('admin/student/update/{id', [StudentController::class, 'update']);

// Route untuk menghapus student
Route::delete('admin/student/delete/{id}', [StudentController::class, 'destroy']);