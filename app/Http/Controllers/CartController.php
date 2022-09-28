<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
  public function show(Request $request)
 {
     $product=Product::find($request->product_id);
        $qty=$request->quantity;

     $request->validate([
         'quantity' => ['min:1', 'max:' . $product->quantity],
     ]);

        return view('cart', ['product' => $product, 'qty'=>$qty]);
   }





}
