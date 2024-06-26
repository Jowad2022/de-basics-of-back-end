<?php

namespace App\Http\Controllers;

use App\Models\Song;
use Illuminate\Http\Request;

class SongController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'artist' => 'required',
        ]);

        Song::create([
            'title' => $request->title,
            'artist' => $request->artist,
        ]);

        return redirect()->route('dashboard')->with('success', 'Song added successfully.');
    }

    // Andere methodes zoals update, destroy, etc. hier implementeren
}
