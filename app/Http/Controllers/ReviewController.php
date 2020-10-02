<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Review;

use Auth;
use DateTime;
use Illuminate\Validation\Rule;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("review_create")->with('book_id', request('book'));
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
            'rating' => 'required|numeric|min:1|max:5',
            'description' => 'required|max:255',
            'book_id' => [
                'required', 'numeric', 'min:1',
                Rule::unique('reviews', 'book_id')->where(function ($query) {
                    return $query->where('user_id', Auth::id());
                })
            ]
        ]);
        
        $review = new Review();
        $review->book_id = request('book_id');
        $review->user_id = Auth::id();
        $review->rating = request('rating');
        $review->description = request('description');
        $review->save();

        return redirect("/book/$review->book_id");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view("review_edit")->with('review', Review::find($id));
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
            'rating' => 'required|numeric|min:1|max:5',
            'description' => 'required|max:255']
        );

        $review = Review::find($id);
        $review->rating = request('rating');
        $review->description = request('description');
        $review->save();

        return redirect("/book/$review->book_id");
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
