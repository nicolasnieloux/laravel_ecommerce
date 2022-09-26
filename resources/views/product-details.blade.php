@extends('layout')

@section('title')
    Détails Produit
@endsection

<?php

?>
@section('content')
    <div>

        <h3>Nom du produit {{$products->name}}</h3>
        <p>Prix TTC : {{$products->price}} </p>
        <p> <img src="{{$products->order_product->product_id}}"> </p>

        <hr>

    </div>

@endsection
