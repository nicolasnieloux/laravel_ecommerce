@extends('layout')

@section('title')
    Home
@endsection

@section('content')


      <div>

        <h3>Nom du produit</h3>
        <p>Prix TTC : </p>
        <p>Prix HT : </p>

        <p>Prix Discount </p>

        <p> Attend les soldes </p>

        <p> Image du produit </p>

        <hr>

    </div>

@endsection


@section('footer')
    <h3>Au revoir </h3>
    @parent
@endsection
