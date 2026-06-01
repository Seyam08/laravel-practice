{{-- @extends tells Blade which layout file to wrap this view with --}}
@extends('layouts.app')

{{-- @section('title') fills the @yield('title') slot in the layout --}}
@section('title', 'Home')

{{-- @section('content') fills the @yield('content') slot — this is the page body --}}
@section('content')
    <h1>Home</h1>
@endsection
