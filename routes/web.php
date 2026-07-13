<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/books', function () {
    $books = [
        ['id' => 1, 'title' => 'The Hobbit', 'author' => 'J.R.R. Tolkien'],
        ['id' => 2, 'title' => '1984', 'author' => 'George Orwell'],
        ['id' => 3, 'title' => 'To Kill a Mockingbird', 'author' => 'Harper Lee'],
        ['id' => 4, 'title' => 'Brave New World', 'author' => 'Aldous Huxley'],
        ['id' => 5, 'title' => 'Fahrenheit 451', 'author' => 'Ray Bradbury'],
    ];

    return view('books.index', ['books' => $books]);
})->name('books.index');

Route::get('/book/{id}', function ($id) {
    return view('books.show', ['id' => $id]);
})->name('books.show');
