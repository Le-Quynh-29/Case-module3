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

    public function showProductline($id)
    {
        $productlines = ProductLine::where('id', '=', $id)->select('*')->first();
        $des = html_entity_decode($productlines->description);
        return view('frontend.showproductline', compact('productlines', 'des'));
    }

    public function showProduct($id)
    {

        $product = Product::where('id', '=', $id)->select('*')->first();
        $des1 = html_entity_decode($product->description);
        return view('frontend.showproduct', compact('product', 'des1'));
    }
}
