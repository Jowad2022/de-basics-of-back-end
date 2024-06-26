<!-- resources/views/genres/songs/index.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Songs for Genre: {{ $genre->name }}</h1>
    <ul>
        @foreach($songs as $song)
            <li>
                <a href="{{ route('songs.show', $song->id) }}">{{ $song->title }}</a> - {{ $song->artist }}
            </li>
        @endforeach
    </ul>
    <br>

    <!-- Terugknop naar Dashboard -->
    <a href="{{ route('dashboard') }}" class="btn btn-secondary">Terug naar Dashboard</a>
</div>
@endsection
