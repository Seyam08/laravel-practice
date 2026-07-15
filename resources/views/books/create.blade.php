<x-layout title="Add Book">
    <a href="{{ route('books.index') }}"
        class="mb-6 inline-flex items-center gap-1 text-sm font-medium text-gray-500 hover:text-red-500">
        &larr; Back to Books
    </a>

    <div class="overflow-hidden rounded-lg border border-gray-100 bg-white shadow-sm">
        <div class="border-b border-gray-100 px-6 py-5">
            <span class="text-xs font-medium uppercase tracking-wide text-gray-400">Add New Book</span>
            <h1 class="mt-1 text-2xl font-bold text-gray-900">Create a New Book</h1>
        </div>

        <div class="px-6 py-5">
            <h2 class="text-xs font-semibold uppercase tracking-wide text-gray-400">Book Details</h2>
            <p class="mt-2 leading-relaxed text-gray-700">Fill in the details below to add a new book to the collection.
            </p>
        </div>

        <div class="px-6 py-5">
            <form action="{{ route('books.store') }}" method="POST" class="space-y-4">
                @csrf
                <div>
                    <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
                    <input type="text" name="title" id="title" value="{{ old('title') }}" required
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-red-500 focus:ring-red-500 sm:text-sm">
                    @error('title')
                        <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="author_id" class="block text-sm font-medium text-gray-700">Author</label>
                    <select name="author_id" id="author_id" required
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-red-500 focus:ring-red-500 sm:text-sm">
                        <option value="" disabled selected>Select an author</option>
                        @foreach ($authors as $author)
                            <option value="{{ $author->id }}" @selected(old('author_id') == $author->id)>{{ $author->name }}</option>
                        @endforeach
                    </select>
                    @error('author_id')
                        <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                    <textarea name="description" id="description" rows="4" required
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-red-500 focus:ring-red-500 sm:text-sm">{{ old('description') }}</textarea>
                    @error('description')
                        <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="price" class="block text-sm font-medium text-gray-700">Price</label>
                    <div class="relative mt-1">
                        <span class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3 text-sm text-gray-400">$</span>
                        <input type="number" name="price" id="price" value="{{ old('price') }}" step="0.01" min="0" required
                            class="block w-full rounded-md border-gray-300 pl-7 shadow-sm focus:border-red-500 focus:ring-red-500 sm:text-sm">
                    </div>
                    @error('price')
                        <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                    @enderror
                </div>

                <div class="flex items-center justify-end gap-3 border-t border-gray-100 pt-4">
                    <a href="{{ route('books.index') }}"
                        class="rounded-md px-4 py-2 text-sm font-medium text-gray-600 hover:text-gray-900">Cancel</a>
                    <button type="submit"
                        class="rounded-md bg-red-500 px-4 py-2 text-sm font-medium text-white shadow-sm transition-colors hover:bg-red-600">Save
                        Book</button>
                </div>
            </form>
        </div>
    </div>
</x-layout>
