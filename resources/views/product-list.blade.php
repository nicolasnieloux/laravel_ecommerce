@extends('layout')

@section('title')
    {{$toto}}
@endsection

@section('content')
    <div>


        @foreach($products as $product)

            @if($product->available)

                <h3><a href="/product/{{$product->id}}">{{$product->name}}</a></h3>
                <h1>{{$product->id}}</h1>
                <p>Category : {{$product->category->name}}</p>
                <p>Prix TTC : {{$product->price}}</p>
                <img src="{{$product->image}}">
                <hr>
            @endif
        @endforeach

    </div>

@endsection
