<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CoursesController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\KampusController;
use App\Http\Controllers\FrontendController;


/**
 * Method HTTP:
 * 1. GET = menampilkan halaman
 * 2. Post = mengirim data
 * 3. Put = meng-update data
 * 4. Delete = menghapus data
 */

// route untuk menampilkan text
// Route::get('/salam/{nama}', function ($nama) {
//     return "Assalaamualaikum $nama";
// });



Route::get('/', [FrontendController::class, 'home'])->name('frontend.home');
Route::get('/about', [FrontendController::class, 'about'])->name('frontend.about');
Route::get('/feature', [FrontendController::class, 'feature'])->name('frontend.feature');
Route::get('/contact', [FrontendController::class, 'contact'])->name('frontend.contact');
Route::get('/services', [FrontendController::class, 'services'])->name('frontend.services');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified']);

Route::middleware('auth')->group(function () {
    Route::get('admin/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::middleware('auth')->group(function () {
    // Route untuk menampilkan data kampus
    Route::get('admin/kampus', [KampusController::class, 'index'])->name('kampus.index');

    // Route untuk menampilkan form tambah kampus
    Route::get('admin/kampus/create', [KampusController::class, 'create'])->name('kampus.create');

    // Route untuk menyimpan data kampus baru
    Route::post('admin/kampus/store', [KampusController::class, 'store'])->name('kampus.store');

    // Route untuk menampilkan halaman edit kampus
    Route::get('admin/kampus/edit/{id}', [KampusController::class, 'edit'])->name('kampus.edit');

    // Route untuk menyimpan hasil update kampus
    // Route::put('admin/kampus/update/{id}', [KampusController::class, 'update']);

    // Route untuk menghapus kampus
    Route::delete('admin/kampus/delete/{id}', [KampusController::class, 'destroy'])->name('kampus.delete');
});
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
