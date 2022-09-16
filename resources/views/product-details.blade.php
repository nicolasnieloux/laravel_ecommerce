@extends('layout')

@section('title')
    Détails Produit
@endsection

<?php
dd($products);
?>
@section('content')
    <div>

        <h3>Nom du produit {{request('id')}}</h3>

        <p>Prix TTC : </p>
        <p>Prix HT : </p>

        <p>Prix Discount </p>

        <p> Attend les soldes </p>

        <p> Image du produit </p>

        <hr>

    </div>

@endsection
