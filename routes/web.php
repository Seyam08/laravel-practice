<?php

use App\Http\Controllers\AuthController;
use App\Models\Book;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('register', [AuthController::class, 'showRegisterForm'])->name('show.register');
Route::get('login', [AuthController::class, 'showLoginForm'])->name('show.login');
Route::post('register', [AuthController::class, 'register'])->name('register');
Route::post('login', [AuthController::class, 'login'])->name('login');

Route::get('/books', [BookController::class, 'index'])->name('books.index');

Route::get('/book/{book}', [BookController::class, 'show'])->name('books.show');

Route::get('/add-book', [BookController::class, 'create'])->name('books.create');

Route::post('/books', [BookController::class, 'store'])->name('books.store');

Route::delete('/books/{book}', [BookController::class, 'destroy'])->name('books.destroy');
