<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    {{-- @yield pulls the value from child views that define @section('title') --}}
    <title>@yield('title', 'My App')</title>
</head>
<body>

    {{-- Simple nav so you can click between pages --}}
    <nav>
        <a href="/">Home</a> |
        <a href="/about">About</a> |
        <a href="/contact">Contact</a>
    </nav>

    <hr>

    {{-- @yield('content') is the "slot" — child views inject their HTML here --}}
    @yield('content')

</body>
</html>
