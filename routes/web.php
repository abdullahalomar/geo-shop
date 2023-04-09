<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;


Route::get('/', [PageController::class, 'index'])->name('home');
Route::get('about', [PageController::class, 'about'])->name('about');
Route::get('shop', [PageController::class, 'shop'])->name('shop');
Route::get('contact', [PageController::class, 'contact'])->name('contact');
