@extends('layoutBackOffice')

@section('content')

<div class="panel panel-default">
    <div class="panel-heading">
        <h2 class="panel-title">Création d'un produit</h2>
    </div>
    <div class="panel-body">
        <form class="" action="/backoffice" method="post">
            {{ csrf_field() }}

{{--            <div class="form-group">--}}
{{--                <label for="category_id">Categoty Id</label>--}}
{{--                <input type="number" class="form-control" name="category_id" id="category_id">--}}
{{--            </div>--}}
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text"
                       class="form-control @error('name') is-danger @enderror"
                       name="name"
                       id="name"
                       value="{{old('name')}}">

                    @if ($errors->has('name'))
                        <p class="help is-danger">{{$errors->first('name')}}</p>
                    @endif
            </div>

                <div class="form-group">
                <label for="description">Description</label>
                <input type="text" class="form-control @error('description') is-danger @enderror" name="description" id="description">
                    @if ($errors->has('description'))
                    <p class="help is-danger">{{$errors->first('description')}}</p>
                    @endif
            </div>

{{--            <div class="form-group">--}}
{{--                <label for="image">Image</label>--}}
{{--                <input type="text" class="form-control" name="image" id="image">--}}
{{--            </div>--}}

            <div class="form-group">
                <label for="price">Price</label>
                <input type="number"
                       class="form-control @error('price') is-danger @enderror"
                       name="price"
                       id="price">
                @error('price')
                <p class="help is-danger">{{$errors->first('price')}}</p>
                @enderror
            </div>

{{--            <div class="form-group">--}}
{{--                <label for="available">Available</label>--}}
{{--                <input type="number" class="form-control" name="available" id="available">--}}
{{--            </div>--}}

{{--            <div class="form-group">--}}
{{--                <label for="quantity">Quantity</label>--}}
{{--                <input type="number" class="form-control" name="quantity" id="quantity">--}}
{{--            </div>--}}

{{--            <div class="form-group">--}}
{{--                <label for="discount">Discount</label>--}}
{{--                <input type="number" class="form-control" name="discount" id="discount">--}}
{{--            </div>--}}

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>

@endsection
