@extends('layouts.master')

@section('title')
This is Home
@endsection


@section('content') 

<ul>
@foreach ($products as $product)
<a href='{{url("/product/$product->id/edit")}}'><li>{{ $product->name }}</li></a>
@endforeach
</ul>

<a href="{{url('/product/create')}}"><li>create</li></a>

@endsection
