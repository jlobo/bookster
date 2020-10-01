@extends('layouts.app')

@section('title')
Book creation
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <div class="card">
            <div class="card-header">{{$book->title}}</div>
            <div class="card-body">
                <h5 class="card-title">Authors</h5>
                @forelse ($book->authors as $author)
                <form method="POST" action='{{ url("/book/{$book->id}/author/{$author->id}") }}'>
                    @csrf
                    {{ method_field('DELETE') }}
                    <div class="row">
                        <p class="card-text col-md-11 text-md-left">{{$author->first_name}} {{$author->last_name}}</p>
                        <div class="col-md-1">
                            <button type="submit" class="btn btn-link">X</button>
                        </div>
                    </div>
                </form>
                @empty
                <p class="card-text">There are no assigned authors</p>
                @endforelse
            </div>
            <div class="card-body text-right">
                <form method="POST" action='{{ url("/book/{$book->id}/author") }}'>
                    @csrf
                    <select name="author">
                        @foreach ($authors as $author)
                        <option value="{{$author->id}}">{{$author->first_name}} {{$author->last_name}}</option>
                        @endforeach
                    </select>
                    <button type="submit" class="btn btn-primary">Add</button>
                </form>
            </div>

        </div>
        </div>
    </div>
</div>
@endsection
