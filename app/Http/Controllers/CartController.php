<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
  public function show()
 {
        return view('cart');
   }

    public function cart (Request $request, $id)
    {
        $product=Product::find($id);


        $product->quantity = $request->input('quantity');

        $quantity = $request->input('quantity');

        $request->validate([
            'quantity' => 'required | integer | min :1'
        ]);

        if ($quantity > $product->quantity) {
            return redirect('/product')->with('error', 'Pas assez de produits en stock.');
        }
        return view('cart', compact('product'), compact('quantity'));
    }





}
