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
    @if (session('register-success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative text-center"
            role="alert">
            <strong class="font-bold">Success! </strong>
            <span class="block sm:inline">{{ session('register-success') }}</span>
        </div>
    @endif
    @if (session('login-success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative text-center"
            role="alert">
            <strong class="font-bold">Success! </strong>
            <span class="block sm:inline">{{ session('login-success') }}</span>
        </div>
    @endif
    @if (session('logout-success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative text-center"
            role="alert">
            <strong class="font-bold">Success! </strong>
            <span class="block sm:inline">{{ session('logout-success') }}</span>
        </div>
    @endif
    <header class="border-b border-gray-200 bg-white">
        <nav class="mx-auto flex max-w-5xl items-center justify-between px-6 py-4">
            <a href="{{ url('/') }}" class="text-xl font-bold text-red-500">Book Network</a>
            <div class="flex items-center gap-6 text-sm font-medium text-gray-600">
                @auth
                    <a href="{{ route('books.index') }}"
                        class="{{ request()->routeIs('books.index') ? 'text-red-500' : 'hover:text-gray-900' }}">All
                        Books</a>
                    <a href="{{ route('books.create') }}"
                        class="{{ request()->routeIs('books.create') ? 'text-red-500' : 'hover:text-gray-900' }}">Add
                        New Book</a>

                    <a href="{{ route('profile') }}"
                        class="flex items-center gap-1.5 {{ request()->routeIs('profile') ? 'text-red-500' : 'hover:text-gray-900' }}">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-4 w-4">
                            <path fill-rule="evenodd"
                                d="M18.685 19.097A9.723 9.723 0 0 0 21.75 12c0-5.385-4.365-9.75-9.75-9.75S2.25 6.615 2.25 12a9.723 9.723 0 0 0 3.065 7.097A9.716 9.716 0 0 0 12 21.75a9.716 9.716 0 0 0 6.685-2.653Zm-12.54-1.285A7.486 7.486 0 0 1 12 15a7.486 7.486 0 0 1 5.855 2.812A8.224 8.224 0 0 1 12 20.25a8.224 8.224 0 0 1-5.855-2.438ZM15.75 9a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0Z"
                                clip-rule="evenodd" />
                        </svg>
                        {{ Auth::user()->name }}
                    </a>
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit"
                            class="rounded-lg border border-red-300 px-3 py-1.5 text-red-600 transition-colors hover:border-red-300 hover:bg-red-50 hover:text-red-600">Logout</button>
                    </form>
                @else
                    <a href="{{ route('show.register') }}"
                        class="{{ request()->routeIs('show.register') ? 'text-red-500' : 'hover:text-gray-900' }}">Register</a>
                    <a href="{{ route('show.login') }}"
                        class="{{ request()->routeIs('show.login') ? 'text-red-500' : 'hover:text-gray-900' }}">Login</a>
                @endauth
            </div>
        </nav>
    </header>

    <main class="mx-auto max-w-5xl px-6 py-10">
        {{ $slot }}
    </main>
</body>

</html>
