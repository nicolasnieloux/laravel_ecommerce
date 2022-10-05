@extends('layout')

@section('title')
    Cart
@endsection

@section('content')


    <p>Produit commandé: {{$product->id}}</p>
    <p>Produit commandé: {{$product->name}}</p>
    <p>Quantité commandée : {{$qty['quantity']}} </p>

@endsection
