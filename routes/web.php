<?php

use App\Models\Book;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/books', [BookController::class, 'index'])->name('books.index');

Route::get('/book/{id}', function ($id) {
    return view('books.show', ['id' => $id]);
})->name('books.show');
