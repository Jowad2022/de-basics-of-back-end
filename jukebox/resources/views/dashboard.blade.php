<!-- resources/views/dashboard.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Dashboard</h1>

    <!-- Formulier om een nieuwe playlist toe te voegen -->
    <form action="{{ route('playlists.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Playlist Name</label>
            <input type="text" id="name" name="name" class="form-control" placeholder="Enter playlist name" required>
        </div>
        <button type="submit" class="btn btn-primary">Create Playlist</button>
    </form>

    <hr>

    <!-- Lijst met playlists -->
    <h2>Playlists</h2>
    <ul id="playlistList">
        @foreach($playlists as $playlist)
            @if($playlist->user_id === Auth::id())
                <li>
                    <a href="{{ route('playlists.show', $playlist->id) }}">{{ $playlist->name }}</a>
                    <button class="btn btn-link btn-sm text-danger delete-playlist" data-id="{{ $playlist->id }}" style="padding: 0; border: none; background: none;" onclick="confirmDelete(event)">
                        X
                    </button>
                </li>
            @endif
        @endforeach
    </ul>

    <hr>

    <!-- Lijst met genres -->
    <h2>Genres</h2>
    <ul>
        @foreach($genres as $genre)
            <li>
                <a href="{{ route('genres.songs.index', $genre->id) }}">{{ $genre->name }}</a>
            </li>
        @endforeach
    </ul>
</div>

<script>
    function confirmDelete(event) {
        event.preventDefault();
        if (confirm("Are you sure you want to delete this playlist?")) {
            var playlistId = event.target.getAttribute('data-id');
            deletePlaylist(playlistId);
        }
    }

    function deletePlaylist(playlistId) {
        fetch("{{ url('/playlists') }}/" + playlistId, {
            method: 'DELETE',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            },
        })
        .then(response => {
            if (!response.ok) {
                throw new Error('Network response was not ok');
            }
            return response.json();
        })
        .then(data => {
            var playlistList = document.querySelector('#playlistList');
            playlistList.innerHTML = ''; // Clear existing list
            data.forEach(playlist => {
                playlistList.innerHTML += `<li>
                    <a href="{{ url('/playlists') }}/${playlist.id}">${playlist.name}</a>
                    <button class="btn btn-link btn-sm text-danger delete-playlist" data-id="${playlist.id}" style="padding: 0; border: none; background: none;" onclick="confirmDelete(event)">
                        X
                    </button>
                </li>`;
            });
        })
        .catch(error => console.error('Error deleting playlist:', error));
    }
</script>
@endsection

@section('styles')
    <!-- Link naar je CSS-bestand -->
    <link href="{{ asset('css/spotify-style.css') }}" rel="stylesheet">
@endsection
