<x-layout title="Edit Book">
    <div class="mx-auto max-w-5xl">
        <a href="{{ route('books.index') }}"
            class="mb-6 inline-flex items-center gap-1 text-sm font-medium text-gray-500 hover:text-red-500">
            &larr; Back to Books
        </a>

        <h1 class="mb-8 text-2xl font-bold text-gray-900">Edit Book</h1>

        <form action="{{ route('books.update', $book->id) }}" method="POST" class="space-y-6">
            @csrf
            @method('PUT')
            <div>
                <label for="title" class="mb-1.5 block text-sm text-gray-600">Title:</label>
                <input type="text" name="title" id="title" value="{{ old('title', $book->title) }}" required
                    class="block w-full rounded-lg border border-gray-300 bg-slate-50 px-4 py-3 text-gray-900 focus:border-gray-400 focus:bg-white focus:outline-none focus:ring-0">
                @error('title')
                    <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="author_id" class="mb-1.5 block text-sm text-gray-600">Author:</label>
                <select name="author_id" id="author_id" required
                    class="block w-full rounded-lg border border-gray-300 bg-slate-50 px-4 py-3 text-gray-900 focus:border-gray-400 focus:bg-white focus:outline-none focus:ring-0">
                    <option value="" disabled>Select an author</option>
                    @foreach ($authors as $author)
                        <option value="{{ $author->id }}" @selected(old('author_id', $book->author_id) == $author->id)>{{ $author->name }}</option>
                    @endforeach
                </select>
                @error('author_id')
                    <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="description" class="mb-1.5 block text-sm text-gray-600">Description:</label>
                <textarea name="description" id="description" rows="4" required
                    class="block w-full rounded-lg border border-gray-300 bg-slate-50 px-4 py-3 text-gray-900 focus:border-gray-400 focus:bg-white focus:outline-none focus:ring-0">{{ old('description', $book->description) }}</textarea>
                @error('description')
                    <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="price" class="mb-1.5 block text-sm text-gray-600">Price:</label>
                <div class="relative">
                    <span
                        class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-4 text-gray-400">$</span>
                    <input type="number" name="price" id="price" value="{{ old('price', $book->price) }}" step="0.01"
                        min="0" required
                        class="block w-full rounded-lg border border-gray-300 bg-slate-50 py-3 pl-7 pr-4 text-gray-900 focus:border-gray-400 focus:bg-white focus:outline-none focus:ring-0">
                </div>
                @error('price')
                    <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex items-center gap-3 pt-2">
                <button type="submit"
                    class="rounded-lg bg-gray-800 px-5 py-2.5 text-sm font-medium text-white transition-colors hover:bg-gray-900">
                    Update Book
                </button>
                <a href="{{ route('books.index') }}"
                    class="rounded-lg px-4 py-2.5 text-sm font-medium text-gray-500 hover:text-gray-900">Cancel</a>
            </div>
        </form>
    </div>
</x-layout>
