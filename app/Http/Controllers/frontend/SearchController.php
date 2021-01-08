<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductLine;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class SearchController extends Controller
{
    public function searchProduct(Request $request)
    {
        $search = $request->input('search');
        if(!$search){
            return redirect()->route('products.search');
        }

        $products = DB::table('products')
            //->where('productName', 'like', '%'.$search.'%')->get();
            ->where('productName','like','%'.$search.'%')
            ->orWhere('productLine', 'like', '%' . $search . '%')
            ->orWhere('price', '<=',  $search )
            ->get();
        $productline = ProductLine::all();
        Session::flash('search_result',true);
        return view('frontend.searchProduct',compact('products','productline'));
    }

}
