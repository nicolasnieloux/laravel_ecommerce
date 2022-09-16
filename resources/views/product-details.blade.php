@extends('layout')

@section('title')
    Détails Produit
@endsection

@section('content')
    <div>

        <h3>Nom du produit</h3>
        <p>Prix TTC : </p>
        <p>Prix HT : </p>
        <!--        --><?php //if ($product["discount"]!= null) { ?>
        <p>Prix Discount </p>

        <p> Attend les soldes </p>

        <p> Image du produit </p>

        <hr>

    </div>

@endsection
