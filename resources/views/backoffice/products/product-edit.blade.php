@extends('layoutBackOffice')

@section('title')

@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">
            <h2 class="panel-title">Update d'un produit</h2>
        </div>
        <div class="panel-body">
            <form class="" action="/backoffice/update" method="post">

                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" name="name" id="name" value="{{$product->name}}">
                    <input type="hidden" name="id" value="{{$id}}">
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <input type="text" class="form-control" name="description" id="description" value="{{$product->description}}">
                </div>

                <div class="form-group">
                    <label for="price">Price</label>
                    <input type="number" class="form-control" name="price" id="price" value="{{$product->price}}">
                </div>


                <button type="submit" class="btn btn-primary">Upgrade</button>
            </form>
        </div>
    </div>

@endsection
