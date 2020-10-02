@extends('layouts.app')


@section('navbar')
@if (Auth::check())
<li class="nav-item">
    <a class="nav-link" href='{{ url("/review/create?book=$book->id") }}'>New Review</a>
</li>
@endif
@endsection

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
                <form method="post" action='{{url("/book/$book->id/delete")}}'>
                    {{csrf_field()}}
                    By 
                    @foreach ($book->authors as $author)
                        {{ $loop->index != 0 ? '-' : '' }} {{$author->first_name}} {{$author->last_name}}
                    @endforeach
                    | {{$book->published}}
                    | {{$book->genre->name}}
                    @if (Auth::check() && Auth::user()->isCurator())
                    | <a  class="btn btn-link"  href='{{url("/book/$book->id/edit")}}'>Edit</a>
                    - <input class="btn btn-link" type="submit" value="Delete">
                    @endif
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
                <small class="text-muted" style="font-size: small;">{{$review->created_at}}</small>
                    | <b>Stars: {{$review->rating}} </b> 
                    @if (Auth::check() && Auth::id() == $review->user_id)
                    | <a  class="btn btn-link"  href='{{url("/review/$review->id/edit")}}'>Edit</a>
                    @endif
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
