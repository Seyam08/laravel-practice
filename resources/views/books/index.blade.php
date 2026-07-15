<x-layout title="Books">
    <h1 class="mb-6 text-2xl font-bold text-gray-900">Currently Available Books</h1>

    <div class="flex flex-col gap-4">
        @foreach ($books as $book)
            <x-card :href="route('books.show', $book->id)">
                <div>
                    <h2 class="font-bold text-gray-900">{{ $book->title }}</h2>
                    <p class="text-sm text-gray-500">{{ $book->author_name }}</p>
                </div>
            </x-card>
        @endforeach
    </div>
</x-layout>
