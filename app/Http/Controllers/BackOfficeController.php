<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;

class BackOfficeController extends Controller
{

    public function index()
    {
        $products = Product::all();
//        $products = Product::with('category')->get(); eager loading

        return view('backoffice', ['products' => $products]);
    }


    public function create()
    {
        return view('backoffice.products.create');

    }


    public function store(Request $request)
    {
        $product = new Product();
        $product->name = $request->input('name');
        $product->description = $request->input('description');
        $product->price = $request->input('price');
        $product->save();

        return redirect('backoffice');
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $product = Product::find($id);

        return view('backoffice.products.product-edit', ['product' => $product, 'id' => $id]);
    }


    public function update(Request $request)
    {
        $product = Product::find($request->input('id'));

        $product->name = $request->input('name');
        $product->description = $request->input('description');
        $product->price = $request->input('price');
        $product->update();

        return redirect('/backoffice');
    }

    public function destroy(Product $product)
    {
//        $product = Product::find($id);
        $product->delete();

        return redirect('/backoffice')->with('success', "Product {$product->id} successfully deleted");
    }
}
