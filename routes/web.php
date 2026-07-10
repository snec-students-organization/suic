<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\SuggestionController;


Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/teachers', [PageController::class, 'teachers'])->name('teachers');
Route::get('/management', [PageController::class, 'management'])->name('management');
Route::get('/gallery', [PageController::class, 'gallery'])->name('gallery');
Route::get('/masa', [PageController::class, 'masa'])->name('masa');
Route::post('/masa/suggestion', [SuggestionController::class, 'submit'])->name('masa.suggestion');