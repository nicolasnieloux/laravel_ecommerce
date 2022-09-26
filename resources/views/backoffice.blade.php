@extends('layoutBackOffice')

@section('content')
    <div>
        <h2>Liste des produits</h2>
        <div class="table-responsive">
            <a href="backoffice/create">
                <button type="button" class="btn btn-lg btn-primary">Create</button>
            </a>
            <table>
                <thead>
                <tr>
                    <th>Index</th>
                    <th>
                    <th>Category id</th>
                    <th>Category Name</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Image</th>
                    <th>Price</th>
                    <th>Weight</th>
                    <th>
                    <th>Available</th>
                    <th>Quantity</th>
                    <th>Discount</th>
                </tr>
                </thead>
                <tbody>
                <tr> @foreach($products as $product)
{{--                        @if($product->available)--}}
                        <td>{{$product->id}}</td>
                        <td>{{$product->category_id}}</td>
                        <td>
                        <td>{{$product->category->name ?? 'Aucun'}}</td>
                        <td>{{$product->name}}</td></td>
                        <td>{{$product->description}}</td>
                        <td>{{$product->image}}</td>
                        <td>{{$product->price}}</td>
                        <td>{{$product->weight}}</td>
                        <td>
                        <td>{{$product->available}}</td>
                        <td>{{$product->quantity}}</td>
                        <td>{{$product->discount}}</td>
                        <td>
                            {{--                            <form action="{{ route('backofficeDestroy', $product->id)}}" method="POST">--}}
                            <form action="/backoffice/{{$product->id}}" method="POST">

                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-outline-primary">Delete</button>
                            </form>
                        </td>
                        <td>
                            <a href="/product-edit/{{$product->id}}">
                                <button type="submit" class="btn btn-outline-primary">Update</button>
                            </a>
                        </td>
{{--                        @endif--}}
                </tr>
                </tbody>
            @endforeach
        </div>
@endsection
