<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ManagerController;
use App\Http\Controllers\AgentController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DrinksController;


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

Route::get('/dashboard', function () {
    return view('layouts/customer/customer');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

    Route::middleware(['auth','usertype:manager'])->group(function(){
        Route::get('/manager/dashboard', [ManagerController::class, 'ManagerDashboard'])->name('manager.dashboard');
    });
    
    Route::middleware(['auth','usertype:agent'])->group(function(){
        Route::get('/agent/dashboard', [AgentController::class, 'AgentDashboard'])->name('agent.dashboard');
    });

/*  
 <!--=========== Customer routes ==============-->*/


 Route::get('/customer/brows-products', [CustomerController::class, 'Browsproducts'])->name('products.electronics');

  /*  
 <!--===========Categories routes ==============-->*/


 Route::get('/products/drinks', [DrinksController::class, 'Drinks'])->name('products.drinks');

 Route::get('/products/beauty', [DrinksController::class, 'Beauty'])->name('products.beauty');

 Route::get('/products/electronics', [CustomerController::class, 'Electronics'])->name('products.electronics');






