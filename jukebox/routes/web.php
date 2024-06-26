<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\GenreSongsController;
use App\Http\Controllers\SongController;
use App\Http\Controllers\PlaylistController;
use App\Http\Controllers\DashboardController;

// Root route voor de hoofdpagina (Dashboard)
Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

// Genre routes
Route::get('/genres', [GenreController::class, 'index'])->name('genres.index');
Route::get('/genres/{genre}/songs', [GenreSongsController::class, 'index'])->name('genres.songs.index');

// Song route voor details
Route::get('/songs/{song}', [SongController::class, 'show'])->name('songs.show');

// Playlist routes
Route::get('/playlists/{playlist}', [PlaylistController::class, 'show'])->name('playlists.show');
Route::post('/playlists', [PlaylistController::class, 'store'])->name('playlists.store');
Route::delete('/playlists/{playlist}', [PlaylistController::class, 'destroy'])->name('playlists.destroy');
Route::post('/playlists/{playlist}/add-song', [PlaylistController::class, 'addSong'])->name('playlists.addSong');
Route::delete('/playlists/{playlist}/remove-song/{song}', [PlaylistController::class, 'removeSong'])->name('playlists.removeSong');

// Route om liedjes per genre toe te voegen aan een playlist
Route::post('/playlists/add-genre-songs/{genre}', [PlaylistController::class, 'addGenreSongs'])->name('playlists.addGenreSongs');

// Extra root route herhaald
Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

// Extra genre routes herhaald
Route::get('/genres', [GenreController::class, 'index'])->name('genres.index');
Route::get('/genres/{genre}/songs', [GenreSongsController::class, 'index'])->name('genres.songs.index');
Route::post('/genres/{genre}/add-song', [GenreSongsController::class, 'addSong'])->name('genres.addSong');
Route::post('/genres/{genre}/add-song', [GenreSongsController::class, 'addSong'])->name('genres.addSong');

