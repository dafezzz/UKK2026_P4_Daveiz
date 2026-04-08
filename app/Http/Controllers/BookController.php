<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::with('rak')->get();
        return view('books.index', compact('books'));
    }

    public function store(Request $request)
    {
        Book::create($request->all());
        return back()->with('success', 'Buku ditambahkan');
    }

    public function update(Request $request, $id)
    {
        Book::findOrFail($id)->update($request->all());
        return back()->with('success', 'Buku diupdate');
    }

    public function destroy($id)
    {
        Book::findOrFail($id)->delete();
        return back()->with('success', 'Buku dihapus');
    }
}