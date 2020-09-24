<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\book;


class BookController extends Controller
{
    public function index() {
        $order = request('order') == 'asc' ? 'desc' : 'asc';
       $books = book::query();
            if (request()->has('sort')){
                $books->orderBy(request()->query('sort'), $order);
            }
        //$books = DB::table('books')->orderBy('title')->where('release_date', 1993)->get();
        return view('welcome', ['books'=>$books->paginate(20), 'order' => $order]);
    }

    public function show($book){
        //1. get book from database
        $book = Book::find($book);
        //2. send book to view
        return view('show', compact('book'));
    }
}
