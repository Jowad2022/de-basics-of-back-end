<?php

// routes/web.php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\GenreSongsController;

// Route voor het tonen van alle genres op de dashboardpagina
Route::get('/dashboard', [GenreController::class, 'index'])->name('dashboard');

// Route voor het tonen van liedjes per specifiek genre
Route::get('/genres/{genreId}/songs', [GenreSongsController::class, 'index'])->name('genres.songs.index');

// Welkomstpagina route
Route::get('/', function () {
    return view('welcome');
});

