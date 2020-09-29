<?php

use Illuminate\Support\Facades\Route;
use App\Book;
use App\Review;

Route::get('/', function () {
    return redirect("/book");
});

Route::get('/test0', function () {
    $authors = Book::find(3)->authors;
    dd($authors);
});

Route::get('/test1', function () {
    $reviews = Book::find(1)->reviews;
    dd($reviews);
});

Route::get('/test2', function () {
    $book = Review::find(1)->book;
    dd($book);
});

Route::get('/book/filter', 'BookController@filter')->name('book.filter');
Route::resource('book', 'BookController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
