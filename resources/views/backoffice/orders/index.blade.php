@extends('layoutBackOffice')

@section('content')
    <div>
        <h2>Liste des commandes</h2>
        <div class="table-responsive">
            <a href="backoffice/create">
                <button type="button" class="btn btn-lg btn-primary">Create</button>
            </a>
            <table>
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Number</th>
                    <th>Customer Id</th>
                 <td></td> <th>Date</th>


                </tr>
                </thead>
                <tbody>
                <tr> @foreach($orders as $order)
                        {{--                        @if($product->available)--}}
                        <td> <a href="/backoffice/order/{{$order->id}}"> {{$order->id}}</a></td>
                        <td>{{$order->number ?? 'Aucun'}}</td>
                     <td>   <td>{{$order->customer_id}}</td>
                  <td>      <td>{{$order->date}}</td></td>


                        {{--                            --}}{{--                            <form action="{{ route('backofficeDestroy', $product->id)}}" method="POST">--}}
                        {{--                            <form action="/backoffice/{{$product->id}}" method="POST">--}}

                        {{--                                @csrf--}}
                        {{--                                @method('DELETE')--}}
                        {{--                                <button type="submit" class="btn btn-outline-primary">Delete</button>--}}
                        {{--                            </form>--}}
                        {{--                        </td>--}}
                        {{--                        <td>--}}
                        {{--                            <a href="/product-edit/{{$product->id}}">--}}
                        {{--                                <button type="submit" class="btn btn-outline-primary">Update</button>--}}
                        {{--                            </a>--}}
                        {{--                        </td>--}}
                        {{--                        --}}{{--                        @endif--}}
                </tr>
                </tbody>
            @endforeach
        </div>
@endsection
