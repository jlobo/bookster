@extends('layouts.app')

@section('title')
Book edition
@endsection

@section('navbar')
@if (Auth::check() && Auth::user()->isCurator())
<li class="nav-item">
    <a class="nav-link" href='{{ url("/book/$book->id/author") }}'>Authors</a>
</li>
@endif
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Book</div>

                <div class="card-body">
                    <form method="POST" action='{{ url("/book/$book->id") }}'>
                        @csrf
                        {{ method_field('PUT') }}
                        <div class="form-group row">
                            <label for="title" class="col-md-4 col-form-label text-md-right">Title</label>
                            <div class="col-md-6">
                                <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{count($errors) ? old('title') : $book->title}}" autocomplete="title" autofocus>
                                @error('title')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="genre" class="col-md-4 col-form-label text-md-right">Genre</label>
                            <div class="col-md-6">
                                <select name="genre">
                                    @foreach ($genres as $genre)
                                    @if((!count($errors) && $genre->id == $book->genre_id) || $genre->id == old('genre'))
                                    <option value="{{$genre->id}}" selected="selected">{{$genre->name}}</option>
                                    @else
                                    <option value="{{$genre->id}}">{{$genre->name}}</option>
                                    @endif
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="image" class="col-md-4 col-form-label text-md-right">Image</label>
                            <div class="col-md-6">
                                <input id="image" type="text" class="form-control @error('image') is-invalid @enderror" name="image" value="{{count($errors) ? old('image') : $book->image}}" autocomplete="image" autofocus>
                                @error('image')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="published" class="col-md-4 col-form-label text-md-right">Published</label>
                            <div class="col-md-6">
                                <input id="published" type="text" class="form-control @error('published') is-invalid @enderror" name="published" value="{{count($errors) ? old('published') : $book->published}}" autocomplete="published" autofocus>
                                @error('published')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">Edit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
