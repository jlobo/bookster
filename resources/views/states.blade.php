@extends('layouts.master')

@section('title')
Activities
@endsection

@section('navbar')
@endsection

@section('content') 
<section class="testimonials text-center bg-light">
    <div class="container">
      <h2 class="mb-5">States</h2>
      <div class="row">

      @forelse ($states as $state)
      <div class="col-lg-4">
          <div class="testimonial-item mx-auto mb-5 mb-lg-0">
            <img class="img-fluid rounded-circle mb-3" src="{{$state->imageUrl}}" alt="" style="height: 200px;width: 200px;">
            <h5><a href="/{{$state->id}}">{{$state->name}}</a></h5>
            <p class="font-weight-light mb-0"> </p>
          </div>
      </div>
      @empty
      Sorry, there are no entries        
      @endforelse
      </div>
    </div>
  </section>
@endsection