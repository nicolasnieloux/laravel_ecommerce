@extends('layout')

@section('title')
    By Price
@endsection

@section('content')
    <div>
        @foreach($products as $product)
            <h3><a href="/product/{{$product->id}}" >{{$product->name}}</a></h3>
            <h1>{{$product->id}}</h1>
            <p>Prix TTC : {{$product->price}}</p>
            <img src="{{$product->image}}">

            <hr>
        @endforeach

    </div>

@endsection
