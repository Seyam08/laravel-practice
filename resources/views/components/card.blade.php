@props(['href'])

<a href="{{ $href }}" class="block rounded-lg border border-gray-200 bg-white p-6 shadow-sm transition hover:shadow-md hover:border-gray-300">
    {{ $slot }}
</a>
