<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\home\homeController;
use App\Http\Controllers\berita\beritaController;
use App\Http\Controllers\about\tentangKamiController;
use App\Http\Controllers\kegiatan\kegiatanController;
use App\Http\Controllers\contactus\contactUsController;
use App\Http\Controllers\Dashboard\KegiatanController as DashboardKegiatanController;

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/kegiatan', [DashboardKegiatanController::class, 'index'])->name('dashboard.kegiatan');

//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

// require __DIR__ . '/auth.php';

Route::get('/kegiatan', [kegiatanController::class, 'index'])->name('kegiatan');
Route::get('/kegiatan/create', [KegiatanController::class, 'create'])->name('kegiatan.create');
Route::post('/kegiatan/store', [KegiatanController::class, 'store'])->name('kegiatan.store');
Route::get('/', [homeController::class, 'index'])->name('home');
Route::get('/tentangKami', [tentangKamiController::class, 'index'])->name('about');
Route::get('/berita', [beritaController::class, 'index'])->name('berita');
Route::get('/contactus', [contactUsController::class, 'index'])->name('contact');
