<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function CustomerDashboard(){

        return view('layouts.customer.customer');
    }

    public function Electronics(){
        return view("layouts.products.electronics"); 
        
    }


    public function Browsproducts(){
        return view("layouts.customer.browsProducts");
    
    }

}
