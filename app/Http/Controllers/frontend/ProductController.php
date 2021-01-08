<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\backend\ProductLineController;
use App\Http\Controllers\Controller;
use App\Models\Customer;
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
        $productline = ProductLine::where('id', '=', $id)->select('*')->first();
        $des1 = html_entity_decode($productline->description);
        $product = Product::where('productLine',$productline->id)->get();
        return view('frontend.showproductline', compact('productline','des1','product'));
    }

    public function showProduct($id)
    {

        $product = Product::where('id', '=', $id)->select('*')->first();
        $des1 = html_entity_decode($product->description);
        return view('frontend.showproduct', compact('product', 'des1'));
    }

    public function show($id){
        $productlines = ProductLine::where('id',$id)->first();
        $product = Product::where('productLine',$productlines->id)->get();
        return view('frontend.productline',compact('product'));
    }

}
