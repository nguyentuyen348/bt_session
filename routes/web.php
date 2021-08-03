<?php

use App\Http\Controllers\{CartController, UserController, PageController, ProductController};
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
Route::get('/',function(){
return view('page.index');
});
Route::prefix('page')->group(function (){

    Route::get('/index',[PageController::class,'index'])->name('page.index');

    Route::get('/register',[PageController::class,'register'])->name('page.register');



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


Route::prefix('users')->group(function (){
    Route::get('/list',[UserController::class,'index'])->name('users.list');
    Route::get('/create',[UserController::class,'create'])->name('users.create');
    Route::post('/create', [UserController::class,'store'])->name('users.store');

    Route::get('/profile/{id}',[UserController::class,'profile'])->name('users.profile');

    Route::get('/edit/{id}',[UserController::class,'edit'])->name('users.edit');
    Route::post('/edit/{id}',[UserController::class,'update'])->name('users.update');

    Route::get('/destroy/{id}',[UserController::class,'destroy'])->name('users.destroy');

    Route::get('/login',[PageController::class,'login'])->name('users.login');
    Route::post('/login',[PageController::class,'isUser'])->name('users.come');

    Route::get('/logout',[PageController::class,'logout'])->name('users.logout');

});

Route::prefix('cart')->group(function () {
    Route::get('/detail', [CartController::class, 'detail'])->name("cart.detail");
    Route::get('/addtocart/{id}', [CartController::class, 'addToCart'])->name("cart.addToCart");
    Route::get('/delete/{id}', [CartController::class,'deleteById'])->name("cart.delete");

});


