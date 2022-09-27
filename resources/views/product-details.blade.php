@extends('layout')

@section('title')
    Détails Produit
@endsection




@section('content')
    <div>

        <h3>Nom du produit {{$product->name}}</h3>
        <p>Prix TTC : {{$product->price}} </p>
{{--        <p> <img src=""> </p>--}}
        <form action="/product/{id}" method="get">
            @csrf
            <label for="quantity">Quantity :</label>
            <input type="number" name="quantity" min="1" class="@error('quantity') is-invalid @enderror">
            <button type="submit" name="add_to_cart"
                    class="btn btn-info">Add To Cart</button>

            @error('quantity')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror


        </form>

        <hr>

    </div>

@endsection
