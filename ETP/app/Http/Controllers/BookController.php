<?php

namespace App\Http\Controllers;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::all();
        return view('books.index', compact('books'));
    }

    public function create()
    {
        return view('books.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string',
            'year' => 'required|digits:4|integer|min:1000|max:' . date('Y'),
        ]);

        Book::create($request->all());
        return redirect()->route('books.index')->with('success', 'Book added!');
    }

    public function edit(Book $book)
    {
        return view('books.edit', compact('book'));
    }

    public function update(Request $request, Book $book)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string',
            'year' => 'required|digits:4|integer|min:1000|max:' . date('Y'),
        ]);

        $book->update($request->all());
        return redirect()->route('books.index')->with('success', 'Book updated!');
    }

    public function destroy(Book $book)
    {
        $book->delete();
        return redirect()->route('books.index')->with('success', 'Book deleted!');
    }
}
