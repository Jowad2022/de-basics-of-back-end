@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Liedjes voor Genre: {{ $genre->name }}</h1>

    <h2>Songs</h2>
    <ul>
        @foreach($songs as $song)
            <li>{{ $song->title }} - {{ $song->artist }}</li>
        @endforeach
    </ul>

    <!-- Knop om liedjes toe te voegen aan een playlist -->
    <form action="{{ route('playlists.addGenreSongs', $genre->id) }}" method="POST">
        @csrf
        <button type="submit" class="btn btn-primary">Voeg 20 liedjes toe aan playlist</button>
    </form>

    <br>

    <!-- Terugknop naar Dashboard -->
    <a href="{{ route('dashboard') }}" class="btn btn-secondary">Terug naar Dashboard</a>
</div>
@endsection
