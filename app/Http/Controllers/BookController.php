<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function show($id): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        $book = Book::findOrFail($id);
        return view('books.show', compact('book'));
    }
    public function index(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        $books = Book::all();
        return view('books.index', ['books' => $books]);
    }

    public function search(Request $request): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {

        $searchTerm = $request->input('search', '');
        $books = Book::where('title', 'like', '%'.$searchTerm.'%')->get();
        return view('books.index', ['books' => $books]);
    }
}
