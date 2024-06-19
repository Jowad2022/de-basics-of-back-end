<!-- resources/views/dashboard.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Jukebox</title>
</head>
<body>
    <h1>Dashboard - Jukebox</h1>

    <h2>Genres</h2>
    <ul>
        @foreach ($genres as $genre)
            <li>{{ $genre->name }}</li>
        @endforeach
    </ul>
</body>
</html>
