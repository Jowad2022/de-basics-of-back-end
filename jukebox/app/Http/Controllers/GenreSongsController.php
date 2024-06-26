<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Genre;
use App\Models\Song;

class GenreSongsController extends Controller
{
    /**
     * Toon alle liedjes van een specifiek genre.
     *
     * @param  \App\Models\Genre  $genre
     * @return \Illuminate\Contracts\View\View
     */
    public function index(Genre $genre)
    {
        // Haal alle liedjes op die behoren tot dit genre
        $songs = $genre->songs()->get();

        // Return een view met de lijst van liedjes van dit genre
        return view('genres.songs.index', compact('genre', 'songs'));
    }

    /**
     * Voeg een liedje toe aan het genre.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Genre  $genre
     * @return \Illuminate\Http\RedirectResponse
     */
    public function addSong(Request $request, Genre $genre)
    {
        $request->validate([
            'song_id' => 'required|exists:songs,id',
        ]);

        $song = Song::findOrFail($request->song_id);

        $genre->songs()->attach($song);

        // Keer terug naar de detailpagina van het genre met een succesmelding
        return redirect()->route('genres.songs.index', $genre->id)->with('success', 'Song added to genre.');
    }
}
