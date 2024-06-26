@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ $playlist->name }}</h1>

    <h2>Songs</h2>
    <ul>
        @foreach($playlist->songs as $song)
            <li>{{ $song->title }} - {{ $song->artist }}</li>
        @endforeach
    </ul>

    <h2>Add a Song</h2>
    <form action="{{ route('playlists.addSong', $playlist->id) }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="song_id">Song</label>
            <select name="song_id" id="song_id" class="form-control">
                @foreach(App\Models\Song::all() as $song)
                    <option value="{{ $song->id }}">{{ $song->title }} - {{ $song->artist }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Add to Playlist</button>
    </form>

    <br>

    <!-- Terugknop naar Dashboard -->
    <a href="{{ route('dashboard') }}" class="btn btn-secondary">Terug naar Dashboard</a>
</div>
@endsection
