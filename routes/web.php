<?php

use App\Http\Controllers\{CustomerController, ProductController};
use Illuminate\Support\Facades\Route;

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

Route::prefix('page')->group(function (){

    Route::get('/index',[\App\Http\Controllers\PageController::class,'index'])->name('page.index');

    Route::get('/register',[\App\Http\Controllers\PageController::class,'register'])->name('page.register');

    Route::get('/login',[\App\Http\Controllers\PageController::class,'login'])->name('page.login');
    Route::post('/login',[\App\Http\Controllers\PageController::class,'isCustomer'])->name('page.customer');

});


Route::prefix('products')->group(function (){

    Route::get('/list',[ProductController::class,'index'])->name('products.list');

    Route::get('/create',[ProductController::class,'create'])->name('products.create');
    Route::post('/create', [ProductController::class,'store'])->name('products.store');

    Route::get('/detail/{id}',[ProductController::class,'detail'])->name('products.detail');

    Route::get('/edit/{id}',[ProductController::class,'edit'])->name('products.edit');
    Route::post('/edit/{id}',[ProductController::class,'update'])->name('products.update');

    Route::get('/destroy/{id}',[ProductController::class,'destroy'])->name('products.destroy');

});

Route::prefix('customers')->group(function (){



    Route::get('/list',[CustomerController::class,'index'])->name('customers.list');
    Route::get('/create',[CustomerController::class,'create'])->name('customers.create');
    Route::post('/create', [CustomerController::class,'store'])->name('customers.store');

    Route::get('/profile/{customer_id}',[CustomerController::class,'profile'])->name('customers.profile');

    Route::get('/edit/{customer_id',[CustomerController::class,'edit'])->name('customers.edit');
    Route::post('/edit/{customer_id}',[CustomerController::class,'update'])->name('customers.update');

    Route::get('/destroy/{customer_id}',[CustomerController::class,'destroy'])->name('customers.destroy');
});

