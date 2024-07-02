<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManagerController extends Controller
{
    public function ManagerDashboard(){

        return view('layouts.manager.manager');
    }
}
