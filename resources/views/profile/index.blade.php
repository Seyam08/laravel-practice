<x-layout title="My Profile">
    <div class="mx-auto max-w-2xl">
        <a href="{{ route('books.index') }}"
            class="mb-6 inline-flex items-center gap-1 text-sm font-medium text-gray-500 hover:text-red-500">
            &larr; Back to Books
        </a>

        <h1 class="mb-8 text-2xl font-bold text-gray-900">My Profile</h1>

        <div class="rounded-2xl border border-gray-200 bg-white p-8 shadow-sm">
            <div class="flex items-center gap-4 border-b border-gray-100 pb-6">
                <div class="flex h-16 w-16 items-center justify-center rounded-full bg-gray-800 text-xl font-semibold text-white">
                    {{ strtoupper(substr($user->name, 0, 1)) }}
                </div>
                <div>
                    <p class="text-lg font-semibold text-gray-900">{{ $user->name }}</p>
                    <p class="text-sm text-gray-500">{{ $user->email }}</p>
                </div>
            </div>

            <dl class="mt-6 space-y-5">
                <div>
                    <dt class="text-sm text-gray-600">Name</dt>
                    <dd class="mt-1 text-base text-gray-900">{{ $user->name }}</dd>
                </div>

                <div>
                    <dt class="text-sm text-gray-600">Email</dt>
                    <dd class="mt-1 text-base text-gray-900">{{ $user->email }}</dd>
                </div>

                <div>
                    <dt class="text-sm text-gray-600">Email Status</dt>
                    <dd class="mt-1">
                        @if ($user->email_verified_at)
                            <span class="inline-block rounded-full bg-green-100 px-3 py-1 text-xs font-medium text-green-700">
                                Verified
                            </span>
                        @else
                            <span class="inline-block rounded-full bg-yellow-100 px-3 py-1 text-xs font-medium text-yellow-700">
                                Not Verified
                            </span>
                        @endif
                    </dd>
                </div>

                <div>
                    <dt class="text-sm text-gray-600">Member Since</dt>
                    <dd class="mt-1 text-base text-gray-900">{{ $user->created_at->format('F j, Y') }}</dd>
                </div>
            </dl>

            <div class="mt-8 flex items-center gap-3 border-t border-gray-100 pt-6">
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit"
                        class="rounded-lg bg-gray-800 px-5 py-2.5 text-sm font-medium text-white transition-colors hover:bg-gray-900">
                        Logout
                    </button>
                </form>
                <a href="{{ route('books.index') }}"
                    class="rounded-lg px-4 py-2.5 text-sm font-medium text-gray-500 hover:text-gray-900">Back to Books</a>
            </div>
        </div>
    </div>
</x-layout>
