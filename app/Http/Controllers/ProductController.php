<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function productList(): string
    {
        $products = DB::select('select * from products');
        return view('product-list', ['products' => $products]);

    }

    public function productDetail($id)
    {

        $products = DB::select('select * from products where id=$id');
        return view('product-details', ['products' => $id]);
    }


}

