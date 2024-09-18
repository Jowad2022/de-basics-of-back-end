<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Playlist;
use Illuminate\Support\Facades\Auth;
use App\Models\Song;
use App\Models\Genre;

class PlaylistController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth'); // Require login for all actions
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:playlists|max:255',
        ]);

        $playlist = Playlist::create([
            'name' => $request->name,
            'user_id' => Auth::id(), // Associate with the logged-in user
        ]);

        return redirect()->route('dashboard')->with('success', 'Playlist successfully created.');
    }

    public function show(Playlist $playlist)
    {
        // Ensure the user can only view their own playlists
        if ($playlist->user_id !== Auth::id()) {
            abort(403);
        }

        return view('playlists.playlist', compact('playlist'));
    }

    public function destroy(Playlist $playlist)
    {
        // Ensure the user can only delete their own playlists
        if ($playlist->user_id !== Auth::id()) {
            abort(403);
        }

        $playlist->delete();

        return redirect()->route('dashboard')->with('success', 'Playlist deleted.');
    }

    public function addGenreSongs(Request $request, Genre $genre)
    {
        $playlist = Playlist::find($request->playlist_id);

        if (!$playlist || $playlist->user_id !== Auth::id()) {
            abort(403);
        }

        $songs = $genre->songs()->limit(20)->get();

        foreach ($songs as $song) {
            $playlist->songs()->attach($song);
        }

        return redirect()->route('playlists.show', $playlist->id)->with('success', '20 songs added to playlist.');
    }
}
