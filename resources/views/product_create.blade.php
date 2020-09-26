@extends('layouts.master')

@section('title')
This is Home
@endsection


@section('content') 

<form method="post" action="{{url('/product')}}">
    {{csrf_field()}}
    <div>
        <label>name</label>
        <input class="form-control" name="name" type="text" value="{{old('name')}}"  aria-invalid="false">
        <label>{{$errors->first('name')}}</label>
    </div>
    <div>
        <label>price</label>
        <input class="form-control" name="price" type="text" value="{{old('price')}}"  aria-invalid="false">
        <label>{{$errors->first('price')}}</label>
    </div>
    <div>
        <label>manufactorer</label>
        <select name="manufactorer">
            @foreach ($manufactorers as $manufactorer)
            @if($manufactorer->id == old('manufactorer'))
            <option value="{{$manufactorer->id}}" selected="selected">{{$manufactorer->name}}</option>
            @else
            <option value="{{$manufactorer->id}}">{{$manufactorer->name}}</option>
            @endif
            @endforeach
        </select>
    </div>
    <button class="btn btn-primary btn-xl" type="submit">Send</button>
</form>
@endsection
