@extends('layout')

@section('title')
    Détails Produit
@endsection




@section('content')
    <div>

        <h3>Nom du produit {{$product->name}}</h3>
        <p>Prix TTC : {{$product->price}} </p>
{{--        <p> <img src=""> </p>--}}
        <form action="" method="POST">
            @csrf
            <label for="quantity">Quantity :</label>
            <input type="number" name="quantity" min="1">
            <button type="submit" name="add_to_cart"
                    class="btn btn-info">Add To Cart</button>
        </form>

        <hr>

    </div>

@endsection
