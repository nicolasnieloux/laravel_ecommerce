<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
   public function index(): string
   {
       return view('homepage', ['homepage' => 'Penser à commander']);
   }

}
