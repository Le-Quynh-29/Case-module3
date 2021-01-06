<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\backend\ProductLineController;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductLine;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        $productlines = ProductLine::all();
        return view('frontend.list',compact('products','productlines'));
    }

//    public function showproductline()
//    {
//
//        return view('frontend.list',compact('productlines'));
//    }
}
