<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function search(Request $request): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        $search = $request->input('search');

        // Tìm kiếm sách dựa trên tên sách
        $books = Book::where('title', 'like', '%' . $search . '%')->get();

        return view('books.index', ['books' => $books]);
    }
}
