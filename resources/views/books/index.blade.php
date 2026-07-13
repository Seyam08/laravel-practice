<x-layout title="Books">
    <h1>Books</h1>

    <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-3">
        @foreach ($books as $book)
            <x-card :href="route('books.show', $book['id'])">
                <h2 class="text-lg font-semibold text-gray-900">{{ $book['title'] }}</h2>
                <p class="text-sm text-gray-500">{{ $book['author'] }}</p>
            </x-card>
        @endforeach
    </div>
</x-layout>
