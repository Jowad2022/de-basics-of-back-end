<!-- resources/views/songs/index.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Songs per Genre</title>
</head>
<body>
    <h1>Songs per Genre</h1>

    <ul>
        @foreach ($songs as $song)
            <li>{{ $song->title }}</li>
        @endforeach
    </ul>
</body>
</html>
