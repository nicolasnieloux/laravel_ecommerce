@extends('layout')

@section('title')
    Catégorie des produits
@endsection

@section('content')

    <div>
        <h2>Liste des produits par catégorie</h2>
        <div class="table-responsive">


            <tr> @foreach($categories as $category)

                <p>{{$category->name}}</p>

                    @foreach($category->product as $product)

                        <p>Produit : {{$product->name ?? 'Aucun'}}</p>

                    @endforeach

                        <hr>


            {{--                    Category : {{$product->category->name}}--}}
        </div>

    @endforeach
@endsection