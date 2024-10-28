<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
  public function sai_products(){
    return view('layouts.product.sai_products');
  }


  public function safi_products(){
    return view('layouts.product.safi_products');
  }
}
