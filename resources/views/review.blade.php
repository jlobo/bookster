@extends('layouts.master')

@section('title')
Reviews
@endsection

@section('content') 
<?php
    $id = NULL;
    $username = "";
    $rating = "";
    $description = "";
    if ($review != NULL) {
        $id = $review->id;
        $username = $review->username;
        $rating = $review->rating;
        $description = $review->description;
    }
?> 
<section class="testimonials text-center bg-light">
    <div class="container">
        <h2 class="mb-5">Review</h2>
        <div class="row">
            <div class="col-lg-8 mx-auto">
                @if ($id != NULL)
                <form method="post" action="/review/{{$id}}">
                @else
                <form method="post" action="/review">
                @endif
                    {{csrf_field()}}
                    <input type="hidden" name="activity_id" value="{{$activity_id}}">
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2">
                            <label>Username</label>
                            <input class="form-control" name="username" type="text" value="{{$username}}"  aria-invalid="false">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2">
                            <label>Rating</label>
                            <input class="form-control" name="rating" type="text" value="{{$rating}}" aria-invalid="false">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2">
                            <label>Description</label>
                            <textarea class="form-control" rows="5" name="description" aria-invalid="false">{{$description}}</textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <br>
                    <div class="form-group">
                    <button class="btn btn-primary btn-xl" type="submit">Send</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
  </section>
@endsection

