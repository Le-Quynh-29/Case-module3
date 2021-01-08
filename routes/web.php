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

Route::group(['prefix' => 'admin'], function () {
    Route::get('login', [\App\Http\Controllers\backend\LoginController::class, 'showLogin'])->name('show.login');
    Route::post('/login', [\App\Http\Controllers\backend\LoginController::class, 'login'])->name('user.login');
    Route::get('logout', [\App\Http\Controllers\backend\LoginController::class, 'logout'])->name('logout');


    Route::middleware('LoginCheck')->group(function () {

        Route::group(['middleware' => 'locale'], function () {

            Route::get('change-language/{language}', [\App\Http\Controllers\backend\LanguageController::class, 'changeLanguage'])->name('user.change-language');


            Route::get('/welcome', function () {
                return view('backend.welcome');
            })->name('welcome');


            Route::group(['prefix' => 'customers'], function () {
                Route::get('/', [\App\Http\Controllers\backend\CustomerController::class, 'index'])->name('customers.list');
                Route::get('/create', [\App\Http\Controllers\backend\CustomerController::class, 'create'])->name('customers.create');
                Route::post('/create', [\App\Http\Controllers\backend\CustomerController::class, 'store'])->name('customers.store');
                Route::get('/edit/{id}', [\App\Http\Controllers\backend\CustomerController::class, 'edit'])->name('customers.edit');
                Route::post('/edit/{id}', [\App\Http\Controllers\backend\CustomerController::class, 'update'])->name('customers.update');
                Route::get('/delete/{id}', [\App\Http\Controllers\backend\CustomerController::class, 'destroy'])->name('customers.destroy');
            });


            Route::group(['prefix' => 'orders'], function () {
                Route::get('/', [\App\Http\Controllers\backend\OrderController::class, 'index'])->name('orders.list');
                Route::get('/create', [\App\Http\Controllers\backend\OrderController::class, 'create'])->name('orders.create');
                Route::post('/create', [\App\Http\Controllers\backend\OrderController::class, 'store'])->name('orders.store');
                Route::get('/edit/{id}', [\App\Http\Controllers\backend\OrderController::class, 'edit'])->name('orders.edit');
                Route::post('/edit/{id}', [\App\Http\Controllers\backend\OrderController::class, 'update'])->name('orders.update');
                Route::get('/delete/{id}', [\App\Http\Controllers\backend\OrderController::class, 'destroy'])->name('orders.destroy');
            });


            Route::group(['prefix' => 'orderdetails'], function () {
                Route::get('/', [\App\Http\Controllers\backend\OrderDetailController::class, 'index'])->name('orderdetails.list');
                Route::get('/create', [\App\Http\Controllers\backend\OrderDetailController::class, 'create'])->name('orderdetails.create');
                Route::post('/create', [\App\Http\Controllers\backend\OrderDetailController::class, 'store'])->name('orderdetails.store');
                Route::get('/edit/{id}', [\App\Http\Controllers\backend\OrderDetailController::class, 'edit'])->name('orderdetails.edit');
                Route::post('/edit/{id}', [\App\Http\Controllers\backend\OrderDetailController::class, 'update'])->name('orderdetails.update');


            });
            Route::group(['prefix' => 'products'], function () {
                Route::get('/', [\App\Http\Controllers\backend\ProductController::class, 'index'])->name('products.list');
                Route::get('/create', [\App\Http\Controllers\backend\ProductController::class, 'create'])->name('products.create');
                Route::post('/create', [\App\Http\Controllers\backend\ProductController::class, 'store'])->name('products.store');
                Route::get('edit/{id}', [\App\Http\Controllers\backend\ProductController::class, 'edit'])->name('products.edit');
                Route::post('/edit/{id}', [\App\Http\Controllers\backend\ProductController::class, 'update'])->name('products.update');
                Route::get('/delete/{id}', [\App\Http\Controllers\backend\ProductController::class, 'destroy'])->name('products.delete');

            });

            Route::group(['prefix' => 'productline'], function () {
                Route::get('/', [\App\Http\Controllers\backend\ProductLineController::class, 'index'])->name('productline.list');
                Route::get('/create', [\App\Http\Controllers\backend\ProductLineController::class, 'create'])->name('productline.create');
                Route::post('/create', [\App\Http\Controllers\backend\ProductLineController::class, 'store'])->name('productline.store');
                Route::get('/edit/{id}', [\App\Http\Controllers\backend\ProductLineController::class, 'edit'])->name('productline.edit');
                Route::post('/edit/{id}', [\App\Http\Controllers\backend\ProductLineController::class, 'update'])->name('productline.update');
                Route::get('/delete/{id}', [\App\Http\Controllers\backend\ProductLineController::class, 'destroy'])->name('productline.delete');

            });


        });


    });


});
Route::group(['prefix'], function () {
    Route::get('', [\App\Http\Controllers\frontend\ProductController::class, 'index'])->name('products.show');

});
Route::group(['prefix' => 'user'], function () {

    Route::get("login", [\App\Http\Controllers\frontend\LoginController::class, "showLogin"])->name("showLogin");
    Route::post("loginfrontend", [\App\Http\Controllers\frontend\LoginController::class, 'login'])->name('frontend.login');
    Route::get("register", [\App\Http\Controllers\frontend\LoginController::class, "showRegister"])->name("showRegister");
    Route::post("register", [\App\Http\Controllers\frontend\LoginController::class, "storeRegister"])->name("storeRegister");
    Route::get('logoutfrontend', [\App\Http\Controllers\frontend\LoginController::class, 'logout'])->name('frontend.logout');
    //    Route::group(['prefix' => 'show'], function () {


    Route::get('/list', [\App\Http\Controllers\frontend\ProductController::class, 'index'])->name('products.show');
    Route::get('/list/{id}', [\App\Http\Controllers\frontend\ProductController::class, 'showProductline'])->name('productline.detail');
    Route::get('/show/{id}', [\App\Http\Controllers\frontend\ProductController::class, 'showProduct'])->name('products.detail');
    Route::get('/menu/{id}',[\App\Http\Controllers\frontend\ProductController::class,'show'])->name('show.menu');

    Route::post('/search',[\App\Http\Controllers\frontend\SearchController::class,'searchProduct'])->name('products.search');
    Route::post('/searchpl',[\App\Http\Controllers\frontend\SearchController::class,'searchProductLine'])->name('productline.search');

    //menu
    Route::get('menu', function () {
        return view('frontend.searchProduct');
    })->name('search');
});
