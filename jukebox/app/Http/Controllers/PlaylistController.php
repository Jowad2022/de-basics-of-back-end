<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Playlist;
use App\Models\Genre;
use Illuminate\Support\Facades\Validator;

class PlaylistController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|unique:playlists|max:255',
        ]);

        if ($validator->fails()) {
            return redirect()->route('dashboard')->withErrors($validator)->withInput();
        }

        $playlist = Playlist::create([
            'name' => $request->name,
        ]);

        return redirect()->route('dashboard')->with('success', 'Playlist successfully created.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Playlist  $playlist
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy(Playlist $playlist)
    {
        $playlist->delete();

        $playlists = Playlist::all(); // Haal alle playlists opnieuw op
        return response()->json($playlists);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Playlist  $playlist
     * @return \Illuminate\Contracts\View\View
     */
    public function show(Playlist $playlist)
    {
        // Zorg ervoor dat de view correct wordt geretourneerd
        return view('playlists.playlist', compact('playlist'));
    }

    /**
     * Voeg liedjes van een genre toe aan een playlist.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Genre  $genre
     * @return \Illuminate\Http\RedirectResponse
     */
    public function addGenreSongs(Request $request, Genre $genre)
    {
        // Haal 20 liedjes op voor het gekozen genre
        $songs = $genre->songs()->limit(20)->get();

        // Vind de actieve playlist of maak een nieuwe playlist
        $playlist = Playlist::find($request->playlist_id);

        if (!$playlist) {
            $playlist = Playlist::create([
                'name' => 'Playlist for ' . $genre->name, // Of een naam naar keuze
            ]);
        }

        // Voeg de liedjes toe aan de playlist
        foreach ($songs as $song) {
            $playlist->songs()->attach($song);
        }

        return redirect()->route('playlists.show', $playlist->id)->with('success', '20 liedjes toegevoegd aan playlist.');
    }
}
