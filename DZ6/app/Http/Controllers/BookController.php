<?php

namespace App\Http\Controllers;
use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
//use Illuminate\Validation\Validator;
use Redirect;
//use Validator;

class BookController extends Controller
{
    //
    public function index($id = null)
    {
        return View("form", ['book' => $id ? Book::where('id', $id)->first() : null]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'author' => 'required|max:100|filled',
            'title' => 'required|max:255|filled|unique:books',
            'genre' => 'required|filled',
        ]);
        //var_dump($request->all());
        $book = new Book($request->all());
        /*     $book -> author = $request->input('author');
               $book -> title = $request->input('title');
               $book -> genre = $request->input('genre');
       */
        $book->save();

        return Redirect::route('show_book', ['id' => $book->id]);
    }
}
