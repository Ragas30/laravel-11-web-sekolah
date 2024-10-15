<?php

<<<<<<< HEAD
use App\Http\Controllers\about\tentangKamiController;
use App\Http\Controllers\home\homeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', [homeController::class, 'index'])->name('home');
Route::get('/tentangKami', [tentangKamiController::class, 'index'])->name('about');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
=======
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\home\homeController;
use App\Http\Controllers\berita\beritaController;
use App\Http\Controllers\about\tentangKamiController;
use App\Http\Controllers\kegiatan\kegiatanController;
use App\Http\Controllers\contactus\contactUsController;

Route::get('/', [homeController::class, 'index'])->name('home');
Route::get('/tentangKami', [tentangKamiController::class, 'index'])->name('about');
Route::get('/kegiatan', [kegiatanController::class, 'index'])->name('kegiatan');
Route::get('/berita', [beritaController::class, 'index'])->name('berita');
Route::get('/contactus', [contactUsController::class, 'index'])->name('contact');
>>>>>>> 9c210c35f0dbb5772ffb3bc769f8214f72dc8853
