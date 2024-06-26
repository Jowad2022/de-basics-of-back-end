<h1>{{ $genre->name }} Songs</h1>

<h2>Add Song to {{ $genre->name }}</h2>
<form action="{{ route('genres.addSong', $genre->id) }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="song_id">Song</label>
        <select name="song_id" id="song_id" class="form-control">
            @foreach(App\Models\Song::all() as $song)
                <option value="{{ $song->id }}">{{ $song->title }} - {{ $song->artist }}</option>
            @endforeach
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Add Song</button>
</form>
