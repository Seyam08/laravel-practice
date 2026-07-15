<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::with('author')->orderBy('created_at', 'desc')->paginate(10);

        return view('books.index', ['books' => $books]);
    }

    public function show($id)
    {
        $book = Book::with('author')->findOrFail($id);

        return view('books.show', ['book' => $book]);
    }

    public function create()
    {
        $authors = Author::orderBy('name')->get();

        return view('books.create', ['authors' => $authors]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'author_id' => ['required', 'exists:authors,id'],
            'description' => ['required', 'string'],
            'price' => ['required', 'numeric', 'min:0'],
        ]);

        $book = Book::create($validated);

        return redirect()->route('books.show', $book->id);
    }

    public function destroy($id)
    {
        $book = Book::findOrFail($id);
        $book->delete();

        return redirect()->route('books.index');
    }
}
