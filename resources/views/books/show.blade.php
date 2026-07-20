<x-layout title="Book Details">
    <a href="{{ route('books.index') }}"
        class="mb-6 inline-flex items-center gap-1 text-sm font-medium text-gray-500 hover:text-red-500">
        &larr; Back to Books
    </a>

    <div class="overflow-hidden rounded-lg border border-gray-100 bg-white shadow-sm">
        <div class="border-b border-gray-100 px-6 py-5">
            <span class="text-xs font-medium uppercase tracking-wide text-gray-400">Book #{{ $book->id }}</span>
            <h1 class="mt-1 text-2xl font-bold text-gray-900">{{ $book->title }}</h1>
            <p class="mt-1 text-sm text-gray-500">by {{ $book->author->name }}</p>
        </div>

        <div class="px-6 py-5">
            <h2 class="text-xs font-semibold uppercase tracking-wide text-gray-400">Description</h2>
            <p class="mt-2 leading-relaxed text-gray-700">{{ $book->description }}</p>
        </div>

        <div class="flex flex-wrap gap-6 border-t border-gray-100 bg-gray-50 px-6 py-4">
            <div>
                <span class="text-xs font-semibold uppercase tracking-wide text-gray-400">Price</span>
                <p class="text-lg font-bold text-red-500">${{ number_format($book->price, 2) }}</p>
            </div>
            <div>
                <span class="text-xs font-semibold uppercase tracking-wide text-gray-400">Added</span>
                <p class="text-sm text-gray-700">{{ $book->created_at->format('M j, Y') }}</p>
            </div>
            <div>
                <span class="text-xs font-semibold uppercase tracking-wide text-gray-400">Last Updated</span>
                <p class="text-sm text-gray-700">{{ $book->updated_at->format('M j, Y') }}</p>
            </div>
        </div>

        <div class="flex justify-between gap-3 px-6 py-4">

            <form action="{{ route('books.destroy', $book->id) }}" method="POST"
                onsubmit="return confirm('Are you sure you want to delete this book?');">
                @csrf
                @method('DELETE')
                <button type="submit"
                    class="rounded-md bg-red-500 px-4 py-2 text-sm font-semibold text-white shadow-sm hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2">Delete</button>
            </form>
            <a href="{{ route('books.edit', $book->id) }}"
                class="rounded-md bg-gray-800 px-4 py-2 text-sm font-semibold text-white shadow-sm hover:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-gray-800 focus:ring-offset-2">Edit</a>
        </div>
    </div>
</x-layout>
