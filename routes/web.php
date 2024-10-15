<?php

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
