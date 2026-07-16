<x-layout title="Register">
    <div class="mx-auto max-w-2xl">
        <a href="{{ route('books.index') }}"
            class="mb-6 inline-flex items-center gap-1 text-sm font-medium text-gray-500 hover:text-red-500">
            &larr; Back to Books
        </a>

        <h1 class="mb-8 text-2xl font-bold text-gray-900">Create an Account</h1>

        <form action="#" method="POST" class="space-y-6 rounded-2xl border border-gray-200 bg-white p-8 shadow-sm">
            @csrf

            <div>
                <label for="name" class="mb-1.5 block text-sm text-gray-600">Name:</label>
                <input type="text" name="name" id="name" required
                    class="block w-full rounded-lg border border-gray-300 bg-slate-50 px-4 py-3 text-gray-900 focus:border-gray-400 focus:bg-white focus:outline-none focus:ring-0">
            </div>

            <div>
                <label for="email" class="mb-1.5 block text-sm text-gray-600">Email:</label>
                <input type="email" name="email" id="email" required
                    class="block w-full rounded-lg border border-gray-300 bg-slate-50 px-4 py-3 text-gray-900 focus:border-gray-400 focus:bg-white focus:outline-none focus:ring-0">
            </div>

            <div>
                <label for="password" class="mb-1.5 block text-sm text-gray-600">Password:</label>
                <input type="password" name="password" id="password" required
                    class="block w-full rounded-lg border border-gray-300 bg-slate-50 px-4 py-3 text-gray-900 focus:border-gray-400 focus:bg-white focus:outline-none focus:ring-0">
            </div>

            <div>
                <label for="password_confirmation" class="mb-1.5 block text-sm text-gray-600">Confirm Password:</label>
                <input type="password" name="password_confirmation" id="password_confirmation" required
                    class="block w-full rounded-lg border border-gray-300 bg-slate-50 px-4 py-3 text-gray-900 focus:border-gray-400 focus:bg-white focus:outline-none focus:ring-0">
            </div>

            <div class="flex items-center gap-3 pt-2">
                <button type="submit"
                    class="rounded-lg bg-gray-800 px-5 py-2.5 text-sm font-medium text-white transition-colors hover:bg-gray-900">
                    Register
                </button>
                <a href="{{ route('books.index') }}"
                    class="rounded-lg px-4 py-2.5 text-sm font-medium text-gray-500 hover:text-gray-900">Cancel</a>
            </div>
        </form>
    </div>
</x-layout>
