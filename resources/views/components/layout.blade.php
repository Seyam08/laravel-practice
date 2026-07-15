<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ?? 'Books' }}</title>
    @vite('resources/css/app.css')
</head>

<body class="min-h-screen bg-gray-50">
    @if (session('create-success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative text-center"
            role="alert">
            <strong class="font-bold">Success! </strong>
            <span class="block sm:inline">{{ session('create-success') }}</span>
        </div>
    @endif
    @if (session('delete-success'))
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative text-center" role="alert">
            <strong class="font-bold">Success! </strong>
            <span class="block sm:inline">{{ session('delete-success') }}</span>
        </div>
    @endif
    <header class="border-b border-gray-200 bg-white">
        <nav class="mx-auto flex max-w-5xl items-center justify-between px-6 py-4">
            <a href="{{ url('/') }}" class="text-xl font-bold text-red-500">Book Network</a>
            <div class="flex gap-6 text-sm font-medium text-gray-600">
                <a href="{{ route('books.index') }}" class="hover:text-gray-900">All Books</a>
                <a href="{{ route('books.create') }}" class="hover:text-gray-900">Add New Book</a>
            </div>
        </nav>
    </header>

    <main class="mx-auto max-w-5xl px-6 py-10">
        {{ $slot }}
    </main>
</body>

</html>
