<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\backend\ProductLineController;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductLine;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        $productlines = ProductLine::all();
        $count = Cart::count();
        return view('frontend.list',compact('products','productlines','count'));
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

    public function indexMenu()
    {
        $products = Product::all();
        $productlines = ProductLine::all();
        return view('frontend.menu',compact('products','productlines'));
    }

}
