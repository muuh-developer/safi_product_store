<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

 Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


 Route::middleware(['auth', 'role:1'])->group(function () {

    Route::get('layouts/manager', function(){
        return view('layouts.manager.manager');
    })->name('manager');

    
  
 });


 Route::middleware(['auth', 'role:2'])->group(function () {
     
    Route::get('layouts/agent', function(){
        return view('layouts.agent.agent');
    })->name('agent')->middleware('agent');

 });

Route::middleware(['auth', 'role:3'])->group(function () {

    Route::get('layouts/customer', function(){
        return view('layouts.customer.customer');
    })->name('customer')->middleware('customer');
     
});



Route::get('/signUp', function () {
    return view('auth.login');
});

 /*category routes */
 Route::get('category/list', [CategoryController::class,'list']);

Route::get('category/add', [CategoryController::class,'add']);

Route::post('category/add', [CategoryController::class,'store']);

Route::get('category/{id}/edit', [CategoryController::class, 'edit']);
Route::put('category/{id}/edit', [CategoryController::class,'update']);

 /*Products routes */
 Route::get('/product/home', function () {
    return view('layouts.product.home');
});

Route::get('safi/products/', [ProductController::class,'sai_products']);

Route::get('sai/products/', [ProductController::class,'safi_products']);
