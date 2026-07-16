<?php

use App\Http\Controllers\AuthController;
use App\Models\Book;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('auth')->controller(AuthController::class)->group(function () {
    Route::get('/profile',  'profile')->name('profile');
    Route::post('/logout', 'logout')->name('logout');
});

Route::middleware('auth')->controller(BookController::class)->group(function () {
    Route::get('/books', 'index')->name('books.index');
    Route::get('/book/{book}', 'show')->name('books.show');
    Route::get('/add-book', 'create')->name('books.create');
    Route::post('/books',  'store')->name('books.store');
    Route::delete('/books/{book}', 'destroy')->name('books.destroy');
});

Route::middleware('guest')->controller(AuthController::class)->group(function () {
    Route::get('register',  'showRegisterForm')->name('show.register');
    Route::get('login',  'showLoginForm')->name('show.login');
    Route::post('register', 'register')->name('register');
    Route::post('login', 'login')->name('login');
});
