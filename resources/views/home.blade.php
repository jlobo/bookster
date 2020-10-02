@extends('layouts.app')

@section('navbar')
@if (Auth::check() && Auth::user()->isCurator())
<li class="nav-item">
    <a class="nav-link" href="{{ url('/book/create') }}">New Book</a>
</li>
@endif
@endsection

@section('content')
<section class="testimonials text-center">
    <div class="container">
    <h2 class="mb-5">Books</h2>
        <form method="GET" action='{{ url("/book") }}'>
            <div class="form-row align-items-center">
                <div class="col-auto my-1">
                <input type="text"  name="author" placeholder="author" value="{{request()->author}}">
                </div>
                <div class="col-auto my-1">
                <input type="text"  name="title" placeholder="title"  value="{{request()->title}}">
                </div>
                <div class="col-auto my-1">
                <input type="text"  name="year" placeholder="year"  value="{{request()->year}}">
                </div>
                <div class="col-auto my-1">
                <select class="custom-select mr-sm-2" name="genre">
                    <option value="" selected>Genre...</option>
                    @foreach ($genres as $genre)
                    @if($genre->id == request()->genre)
                    <option value="{{$genre->id}}" selected="selected">{{$genre->name}}</option>
                    @else
                    <option value="{{$genre->id}}">{{$genre->name}}</option>
                    @endif
                    @endforeach
                </select>
                </div>
                <div class="col-auto my-1">
                <button type="submit" class="btn btn-primary">Search</button>
                </div>
            </div>
        </form>    
      <div class="row">

      @forelse ($books as $book)
      <div class="col-lg-4">
          <div class="mx-auto mb-5 mb-lg-0">
            <img class="img-fluid rounded-circle mb-3" src="{{$book->image}}" alt="" style="height: 200px;width: 200px;">
            <h5><a href='{{url("/book/$book->id")}}'>{{$book->title}}</a></h5>
          </div>
      </div>
      @empty
      Sorry, there are no entries        
      @endforelse

      </div>
      <div class="row">
          {{$books->render()}}    
      </div>
    </div>
</section>
@endsection
