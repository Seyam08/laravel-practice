<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ?? 'Books' }}</title>
    @vite('resources/css/app.css')
</head>
<body>
    <header>
        <nav>
            <a href="{{ url('/') }}">Home</a>
            <a href="{{ route('books.index') }}">Books</a>
        </nav>
    </header>

    <main>
        {{ $slot }}
    </main>
</body>
</html>
