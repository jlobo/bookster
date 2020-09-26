@extends('layouts.master')

@section('title')
Reviews
@endsection

@section('content') 
<?php
    $state = strtoupper(trim(request('state')));
    $name = request('name');
    $address = request('address');
    $image = request('image');
    $overview = request('overview');
    if ($activity != NULL) {
        $state = $activity->state;
        $name = $activity->name;
        $address = $activity->address;
        $image = $activity->imageUrl;
        $overview = $activity->overview;
    }
?> 

<section class="testimonials text-center bg-light">
    <div class="container">
        <h2 class="mb-5">Activities</h2>
        <div class="row">
            <div class="col-lg-8 mx-auto">
                
                @if ($id != NULL)
                <form method="post" action="/activity/{{$id}}">
                @else
                <form method="post" action="/activity">
                @endif
                    {{csrf_field()}}
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2">
                            <label>Name</label>
                            <input class="form-control" name="name" type="text" value="{{$name}}"  aria-invalid="false">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2">
                            <label>State</label>
                            <input class="form-control" name="state" type="text" value="{{$state}}" aria-invalid="false">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2">
                            <label>Address</label>
                            <input class="form-control" name="address" type="text" value="{{$address}}" aria-invalid="false">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2">
                            <label>Image</label>
                            <input class="form-control" name="image" type="url" value="{{$image}}" aria-invalid="false">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2">
                            <label>Overview</label>
                            <textarea class="form-control" rows="5" name="overview" aria-invalid="false">{{$overview}}</textarea>
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

