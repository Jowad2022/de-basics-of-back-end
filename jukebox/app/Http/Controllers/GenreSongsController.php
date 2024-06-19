<?php

// app/Http/Controllers/GenreSongsController.php

namespace App\Http\Controllers;

use App\Models\Song;
use Illuminate\Http\Request;

class GenreSongsController extends Controller
{
    public function index($genreId)
    {
        $songs = Song::where('genre_id', $genreId)->get();
        return view('songs.index', compact('songs'));
    }
}
