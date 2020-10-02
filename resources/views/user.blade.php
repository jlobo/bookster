@extends('layouts.app')

@section('title')
Book creation
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                Users By:
                <form method="GET" action='{{ url("/user") }}'>

                <select class="" name="approved">
                    <option value="" selected>Approved...</option>
                    <option value="true">true</option>
                    <option value="false">false</option>
                </select>
                <button type="submit" class="btn btn-primary">search</button>
                </form>
            </div>
            <div class="card-body">
                <h5 class="card-title">Authors</h5>
                @forelse ($users as $user)
                <form method="POST" action='{{ url("/user/{$user->id}") }}'>
                    @csrf
                    {{ method_field('PUT') }}
                    <div class="row">
                        <p class="card-text col-md-10 text-md-left">{{$user->email}} ({{$user->role->name}})</p>
                        <div class="col-md-2">
                            <button type="submit" class="btn btn-primary">{{$user->approved ? 'enable' : 'disable'}}</button>
                        </div>
                    </div>
                </form>
                @empty
                <p class="card-text">There are no assigned authors</p>
                @endforelse
            </div>

        </div>
        </div>
    </div>
</div>
@endsection
