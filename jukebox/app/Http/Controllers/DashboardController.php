<?php

// app/Http/Controllers/DashboardController.php

namespace App\Http\Controllers;

use App\Models\Genre;
use App\Models\Playlist;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;

class DashboardController extends Controller
{
    public function index(): View
    {
        $genres = Genre::all();
        $playlists = Playlist::all();

        return view('dashboard', compact('genres', 'playlists'));
    }
}
