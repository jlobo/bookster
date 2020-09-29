<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Book;
use App\Author;

use DateTime;
use DB;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home')->with('books', Book::paginate(5));
    }

    public function filter(Request $request)
    {
        $this->validate($request, [
            'year' => 'numeric|min:1|max:9999',
            'genre' => 'numeric|min:1']);

        $books = DB::table('books');

        if (!empty(request('author'))) {
            $ids = DB::table('authors')
                ->select('book_id')
                ->join('books_authors', 'books_authors.author_id', '=', 'authors.id')
                ->where('first_name', 'like', '%' . request('author') . '%')
                ->orWhere('last_name', 'like', '%' . request('author') . '%')
                ->groupBy('book_id');
            
            $books = $books->whereIn('id', $ids);
        }

        if (!empty(request('title'))) {
            $books = $books->where('books.title', 'like', '%' . request('title') . '%');
        }

        if (!empty(request('genre'))) {
            $books = $books->where('books.genre_id', '=', request('genre'));
        }

        if (!empty(request('year'))) {
            $date_ini = new DateTime(request('year') . '-01-01');
            $date_end = new DateTime(intval(request('year')) + 1 . '-01-01');
            
            $books = $books->whereBetween('books.published', [$date_ini, $date_end]);
        }

        return view('home')->with('books', $books->paginate(5));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
         */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('book')->with('book', Book::find($id));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
