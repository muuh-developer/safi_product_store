<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DrinksController extends Controller
{
    public function Drinks(){
        return view("layouts.products.drinks");
    }

    public function Beauty(){
        return view("layouts.products.beauty");
    }
}
