<x-layout title="Book Details">
    <h1>Book #{{ $book->id }}</h1>
    <p><strong>Title:</strong> {{ $book-> title }}</p>
    <p><strong>Author:</strong> {{ $book-> author_name }}</p>

    <p><a href="{{ route('books.index') }}">Back to Books</a></p>
</x-layout>
