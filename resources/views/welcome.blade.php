<x-layout title="Seyam Laravel Practice">
    <div class="mx-auto max-w-2xl py-16 text-center">
        <span class="mb-4 inline-block rounded-full bg-red-100 px-3 py-1 text-xs font-medium text-red-600">Laravel
            Practice</span>

        <h1 class="text-4xl font-bold tracking-tight text-gray-900">Welcome to <span
                class="text-red-500">Seyam</span> Laravel Practice</h1>

        <p class="mt-4 text-base text-gray-500">
            A simple book network built while learning Laravel &mdash; browse the catalog, register an account, and
            keep track of your reading.
        </p>

        <div class="mt-8 flex items-center justify-center gap-3">
            <a href="{{ route('books.index') }}"
                class="rounded-lg bg-gray-800 px-5 py-2.5 text-sm font-medium text-white transition-colors hover:bg-gray-900">
                Browse Books
            </a>

            @guest
                <a href="{{ route('show.register') }}"
                    class="rounded-lg border border-gray-300 px-5 py-2.5 text-sm font-medium text-gray-600 transition-colors hover:border-gray-400 hover:text-gray-900">
                    Create an Account
                </a>
            @else
                <a href="{{ route('profile') }}"
                    class="rounded-lg border border-gray-300 px-5 py-2.5 text-sm font-medium text-gray-600 transition-colors hover:border-gray-400 hover:text-gray-900">
                    My Profile
                </a>
            @endguest
        </div>
    </div>
</x-layout>
