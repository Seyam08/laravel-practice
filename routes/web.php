<?php

use Illuminate\Support\Facades\Route;

// Route::view(url, view) — shorthand when a route only needs to return a view.
// No closure needed. Args: 1) URL, 2) view file name (dot notation for subdirs).

Route::view('/', 'home');
Route::view('/about', 'about');
Route::view('/contact', 'contact');
