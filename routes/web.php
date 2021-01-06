<?php

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

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/shop',function (){
    return view('frontend.index');
})->name('shop');

Route::group(['prefix'=> 'customers'],function (){
    Route::get('/',[\App\Http\Controllers\backend\CustomerController::class,'index'])->name('customers.list');
    Route::get('/create',[\App\Http\Controllers\backend\CustomerController::class,'create'])->name('customers.create');
    Route::post('/create',[\App\Http\Controllers\backend\CustomerController::class,'store'])->name('customers.store');
    Route::get('/edit/{id}',[\App\Http\Controllers\backend\CustomerController::class,'edit'])->name('customers.edit');
    Route::post('/edit/{id}',[\App\Http\Controllers\backend\CustomerController::class,'update'])->name('customers.update');
    Route::get('/delete/{id}',[\App\Http\Controllers\backend\CustomerController::class,'destroy'])->name('customers.destroy');
});


Route::group(['prefix'=> 'products'],function (){
    Route::get('/',[\App\Http\Controllers\backend\ProductController::class,'index'])->name('products.list');
    Route::get('/create',[\App\Http\Controllers\backend\ProductController::class,'create'])->name('products.create');
    Route::post('/create',[\App\Http\Controllers\backend\ProductController::class,'store'])->name('products.store');
    Route::get('edit/{id}',[\App\Http\Controllers\backend\ProductController::class,'edit'])->name('products.edit');
    Route::post('/edit/{id}',[\App\Http\Controllers\backend\ProductController::class,'update'])->name('products.update');
    Route::get('/delete/{id}',[\App\Http\Controllers\backend\ProductController::class,'destroy'])->name('products.delete');
    Route::get('/show',[\App\Http\Controllers\backend\ProductController::class,'show'])->name('prpducts.show');

});


Route::group(['prefix'=> 'productline'],function () {
    Route::get('/', [\App\Http\Controllers\backend\ProductLineController::class, 'index'])->name('productline.list');
    Route::get('/create', [\App\Http\Controllers\backend\ProductLineController::class, 'create'])->name('productline.create');
    Route::post('/create', [\App\Http\Controllers\backend\ProductLineController::class, 'store'])->name('productline.store');
    Route::get('edit/{id}', [\App\Http\Controllers\backend\ProductLineController::class, 'edit'])->name('productline.edit');
    Route::post('/edit/{id}', [\App\Http\Controllers\backend\ProductLineController::class, 'update'])->name('productline.update');
    Route::get('/delete/{id}', [\App\Http\Controllers\backend\ProductLineController::class, 'destroy'])->name('productline.delete');

});


// login frontend:
Route::get("login", [\App\Http\Controllers\frontend\LoginController::class, "showLogin"])->name("showLogin");
Route::post("login",[\App\Http\Controllers\frontend\LoginController::class,'login'])->name('login');

Route::get("register", [\App\Http\Controllers\frontend\LoginController::class, "showRegister"])->name("showRegister");
Route::post("register", [\App\Http\Controllers\frontend\LoginController::class, "storeRegister"])->name("storeRegister");

Route::get('logout',[\App\Http\Controllers\frontend\LoginController::class,'logout'])->name('logout');
//

