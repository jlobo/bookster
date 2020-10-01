<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Book;
use App\Author;
use App\Genre;

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
            'year' => 'numeric|min:1700|max:2020',
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
        return view('book_create')->with('genres', Genre::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|max:255',
            'genre' => 'required|numeric|min:1',
            'image' => 'required|max:999',
            'published' => 'required|date']
        );

        $book = new Book;
        $book->title = request('title');
        $book->genre_id = intval(request('genre'));
        $book->image = request('image');
        $book->published = request('published');
        $book->save();

        return redirect("/book/$book->id");
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
        return view('book_edit')->with('book', Book::find($id))->with('genres', Genre::all());
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
        $this->validate($request, [
            'title' => 'required|max:255',
            'genre' => 'required|numeric|min:1',
            'image' => 'required|max:999',
            'published' => 'required|date']
        );

        $book = Book::find($id);
        $book->title = request('title');
        $book->genre_id = intval(request('genre'));
        $book->image = request('image');
        $book->published = request('published');
        $book->save();

        return redirect("/book/$book->id");
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
