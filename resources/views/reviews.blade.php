@extends('layouts.master')

@section('title')
Reviews
@endsection

@section('navbar')
<li class="nav-item active">
  <a class="nav-link" href="/review/{{$activity_id}}">New Review</a>
</li>
@endsection

@section('content') 
<section class="bg-light">
    <div class="container">
        <h2 class="mb-5">{{$activity->name}}</h2>
        <div class="row">
            <div class="subheading mb-5">
                <form method="post" action="/activity/{{$activity_id}}/delete">
                    {{csrf_field()}}
                    <a href="/{{$activity->state_id}}">{{$activity->state}}</a>
                    @if ($activity->address != NULL) · {{$activity->address}} @endif
                    @if ($activity->sentiment != NULL) | {{$activity->sentiment}} @endif
                    @if ($activity->average != NULL) - {{$activity->average}} @endif
                    | <a  class="btn btn-link"  href="/activity/{{$activity_id}}">Edit</a>
                    - <input class="btn btn-link" type="submit" value="Delete">
                </form>
            </div>

        </div>
        <div class="row">
            <img class="img-fluid mb-12" src="{{$activity->imageUrl}}" alt="">
            <p class="lead mb-5">{{$activity->overview}}</p>
        </div>

    </div>
</section>

<section class="bg-light">
    <div class="container">
        <h2 class="mb-5">Reviews @if ($activity->num != NULL): {{$activity->num}} @endif</h2>
        <div class="row">

        @forelse ($reviews as $review)
        <div class="col-12">
                <h3 class="mb-0">{{$review->full_name}}</h3>
                <div class="mb-3">
                    {{$review->username}}
                    | <b>Stars: {{$review->rating}} </b> 
                    | <a  class="btn btn-link"  href="/review/{{$review->id}}/{{$activity_id}}">Edit</a>
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

