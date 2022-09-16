<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function productList(): string
    {
        return view( 'product-list', ['productList' => 'Liste des produits']);

    }

    public function productDetail($id): string
    {
        return view( 'product-details', ['name'=> 'Fiche du produit' . $id]);
    }
}

