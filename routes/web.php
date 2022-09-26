<?php

use App\Http\Controllers\BackOfficeOrderController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\BackOfficeController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', [HomeController::class, "index"]);


Route::get('product', [ProductController::class, "productList"]);


Route::get('product/{id}', [ProductController::class, "productDetail"]);


Route::get('/cart',[CartController::class, 'show']);

Route::get('/test',[\App\Http\Controllers\TestController::class,'index']);

Route::get('/orderbyaz', [ProductController::class, "productbyaz"]);

Route::get('/orderbyprice', [ProductController::class, "productByPrice"]);

Route::get('/backoffice', [BackOfficeController::class,"index"])->name('backoffice');


//Supprimer un produit
Route::delete('/backoffice/{product}', [BackOfficeController::class,'destroy'])->name('backofficeDestroy');
Route::get('/backoffice', [BackOfficeController::class, 'index'])->name('backofficeIndex');

//Methode POST pour ajouter un produit
Route::get('/backoffice/create', [BackOfficeController::class, 'create']);
Route::post('/backoffice', [BackOfficeController::class, 'store']);

//Update un produit
Route::get('/product-edit/{id}', [BackOfficeController::class, 'edit'])->name('backofficeEdit');
Route::put('/backoffice/update', [BackOfficeController::class, 'update']);

//Afficher toutes les orders
Route::get('/backoffice/orders', [BackOfficeOrderController::class, 'index']);

//Afficher une order
Route::get('/backoffice/order/{id}',[BackOfficeOrderController::class, 'show']);

//Afficher les catégories
Route::get('/backoffice/categories/index', [CategoryController::class, 'index']);
