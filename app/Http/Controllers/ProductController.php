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

    public function productDetail(Request $request, $id)
    {
        $request->validate([
            'quantity' => 'max:$product->quantity', 'min:1',
        ]);

        $product=Product::find($id);



//        $products = DB::table('products')->where('id', $id)->get();
//        $products = DB::select('select * from products where id=$id');
        return view('product-details', ['product' => $product]);
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

