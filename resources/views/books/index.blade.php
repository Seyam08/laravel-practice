<x-layout title="Books">
    <h1>Books</h1>

    <ul>
        @foreach ($books as $book)
            <li>
                <a href="{{ route('books.show', $book['id']) }}">{{ $book['title'] }} — {{ $book['author'] }}</a>
            </li>
        @endforeach
    </ul>
</x-layout>
