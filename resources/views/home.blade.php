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

<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div> -->
@endsection
