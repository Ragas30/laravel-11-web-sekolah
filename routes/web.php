<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\home\homeController;
use App\Http\Controllers\about\tentangKamiController;

Route::get('/', [homeController::class, 'index'])->name('home');
Route::get('/tentangKami', [tentangKamiController::class, 'index'])->name('about');
