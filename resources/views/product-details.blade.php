@extends('layout')

@section('title')
    Détails Produit
@endsection




@section('content')
    <div>

        <h3>Nom du produit {{$product->name}}</h3>
        <p>Prix TTC : {{$product->price}} </p>
{{--        <p> <img src=""> </p>--}}
        <form action="/cart" method="post">
            @csrf
            <label for="quantity">Quantity :</label>
            <input type="number" name="quantity" min="1"  max="{{$product->quantity}}">
            <input type="hidden" name="product_id" value="{{$product->id}}">
{{--            <input type="hidden" name="qty" value="">--}}
            @error('quantity')L
            <div class="alert alert-danger">{{"Message avertissement"}}</div>
            @enderror
            <button type="submit" name="add_to_cart"
                    class="btn btn-info">Add To Cart</button>




        </form>

        <hr>

    </div>

@endsection
