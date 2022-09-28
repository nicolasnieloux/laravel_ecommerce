<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models;

class ProductController extends Controller
{
    public function productList()
    {
        $products = Product::all(); //Eloquent - Affiche tous les produits
        $title = "Liste toto";


        //   $products = DB::select('select * from products'); QUERY
        return view('product-list', ['products' => $products], ['toto' => $title]);

    }


    public function productDetail($id)
    {
        $product = Product::find($id);
        return view('product-details', ['product'=>$product, 'id'=>$id]);

    }


    public function productOrder(Request $request)
    {
        $product = Product::find($request->product_id);

$qty=$request->only('product_id', 'quantity');


    $request->validate([
            'quantity' => ['integer','min:1', 'max:' . $product->quantity]
        ]);

        return view('cart', ['product'=>$product, 'qty'=>$qty]);
    }




    public function create()
    {
        return view('backoffice.products.create');

    }

public function productbyaz()
{
//        $products=Models\Product::all()->sortBy("name"); //Eloquent - Affiche tous les produits par ordre alphabétique Collection
    $products = Product::orderBy('name', 'asc')->get();
    return view('orderbyaz', ['products' => $products]);
}

public function productByPrice()
{
    $products = Product::orderBy('price', 'asc')->get();
    return view('orderbyprice', ['products' => $products]);

}


}

