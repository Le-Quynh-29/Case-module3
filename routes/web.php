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
    return view('backend.index');
});

Route::group(['prefix'=> 'customers'],function (){
    Route::get('/',[\App\Http\Controllers\backend\CustomerController::class,'index'])->name('customers.list');
    Route::get('/create',[\App\Http\Controllers\backend\CustomerController::class,'create'])->name('customers.create');
    Route::post('/create',[\App\Http\Controllers\backend\CustomerController::class,'store'])->name('customers.store');
    Route::get('/edit/{id}',[\App\Http\Controllers\backend\CustomerController::class,'edit'])->name('customers.edit');
    Route::post('/edit/{id}',[\App\Http\Controllers\backend\CustomerController::class,'update'])->name('customers.update');
    Route::get('/delete/{id}',[\App\Http\Controllers\backend\CustomerController::class,'destroy'])->name('customers.destroy');
});
