<?php

namespace App\Http\Controllers;

use App\Book;

class BookController extends Controller
{
	public function __construct()
    {
        $this->middleware('guest');
    }

    public function getIndex()
    {

        $book_index = Book::all();
        return view('book_list.index', compact('book_index'));
    }

}
