<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\GenreSongsController;
use App\Http\Controllers\SongController;
use App\Http\Controllers\PlaylistController;
use App\Http\Controllers\DashboardController;

// Authentication Routes...
Auth::routes();

// Redirect to Login Page for Guests
Route::get('/', function () {
    return redirect()->route('login');
})->name('home');

// After login, redirect to the dashboard
Route::get('/home', [HomeController::class, 'index'])->name('home');

// Dashboard Route
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

// Genre routes
Route::get('/genres', [GenreController::class, 'index'])->name('genres.index');
Route::get('/genres/{genre}/songs', [GenreController::class, 'show'])->name('genres.songs.index');

// Song route for details
Route::get('/songs/{song}', [SongController::class, 'show'])->name('songs.show');
Route::resource('songs', SongController::class);

// Playlist routes
Route::post('/playlists/{playlist}/add-song', [PlaylistController::class, 'addSong'])->name('playlists.addSong');
Route::delete('/playlists/{playlist}/remove-song/{song}', [PlaylistController::class, 'removeSong'])->name('playlists.removeSong');
Route::delete('/playlists/{playlist}', [PlaylistController::class, 'destroy'])->name('playlists.destroy');
// Route to store a new playlist
Route::post('/playlists', [PlaylistController::class, 'store'])->name('playlists.store');
// Route to show a playlist
Route::get('/playlists/{playlist}', [PlaylistController::class, 'show'])->name('playlists.show');
// Route to add genre songs to a playlist
Route::post('/playlists/add-genre-songs/{genre}', [PlaylistController::class, 'addGenreSongs'])->name('playlists.addGenreSongs');

// Route to display songs by genre (only keep this version to avoid conflict)
Route::get('/genres/{genre}', [GenreController::class, 'show'])->name('genres.show');
