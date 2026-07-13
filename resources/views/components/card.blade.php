@props(['href'])

<div class="group relative flex items-center justify-between overflow-hidden rounded-lg border border-gray-100 bg-white px-6 py-5 shadow-sm transition hover:shadow-md">
    <span class="absolute inset-y-0 left-0 w-1 -translate-x-full bg-red-500 transition-transform duration-200 group-hover:translate-x-0"></span>
    {{ $slot }}
    <a href="{{ $href }}" class="rounded-md bg-gray-100 hover:bg-red-500 transition-colors duration-200 px-4 py-2 text-sm font-medium text-gray-700 hover:text-white">View Details</a>
</div>
