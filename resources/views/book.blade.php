@extends('layouts.app')

@section('content')
<section class="bg-light">
    <div class="container">
        <h2 class="mb-5">{{$book->title}}</h2>
        <div class="row">
            <img class="img-fluid mb-12" src="{{$book->image}}" alt="">
            <p class="lead mb-5">{{$book->overview}}</p>
        </div>
        <div class="row">
            <div class="mb-12">
                <form method="post" action='{{url("/activity/$book->id/delete")}}'>
                    {{csrf_field()}}
                    By 
                    @foreach ($book->authors as $author)
                        {{ $loop->index != 0 ? '-' : '' }} {{$author->first_name}} {{$author->last_name}}
                    @endforeach
                    | <a href='{{url("/$book->genre_id")}}'>{{$book->genre->name}}</a>
                    | <a  class="btn btn-link"  href='{{url("/activity/$book->id")}}'>Edit</a>
                    - <input class="btn btn-link" type="submit" value="Delete">
                </form>
            </div>
        </div>
    </div>
</section>

<section class="bg-light">
    <div class="container">
        <h2 class="mb-5">Reviews</h2>
        <div class="row">

        @forelse ($book->reviews as $review)
        <div class="col-12">
                <h3 class="mb-0">{{$review->user->name}}</h3>
                <div class="mb-3">
                    {{$review->user->email}}
                    | <b>Stars: {{$review->rating}} </b> 
                    | <a  class="btn btn-link"  href='{{url("/review/$review->id/$book->id")}}'>Edit</a>
                </div>
                <p>{{$review->description}}</p>
        </div>
        @empty
        Sorry, there are no reviews        
        @endforelse
        </div>
    </div>
</section>
@endsection
