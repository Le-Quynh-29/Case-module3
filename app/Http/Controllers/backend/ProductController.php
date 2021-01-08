<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductLine;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */

    public function index()
    {
        $products = Product::paginate(5);
        return view('backend.products.list', compact('products'));
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        $product = ProductLine::all();

        return view('backend.products.create', compact('product'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $product = new Product();
        $product-> productName = $request->input('productName');
        $product-> productLine = $request->input('productLine');
        $product-> descripton = $request->input('descripton');
        $product-> quantity = $request->input('quantity');
        $product-> price = $request->input('price');
        $product-> voucher = $request->input('voucher');

        $file = $request->inputFile;
        if (!$request->hasFile('inputFile')) {
            $product->img = $file;
        } else {
            $file = $request->file('inputFile');
            $fileExtension = $file->getClientOriginalExtension();
            $fileName = $request->inputName;
            $newFileName = "$fileName.$fileExtension";
            $request->file('inputFile')->storeAs('public/images', $newFileName);
            $product->img = $newFileName;
        }
        $product->save();

        return redirect()->route('products.list');



    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
//    public function show($id)
//    {
//        //
//    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::findOrFail($id);

        $productline = ProductLine::all();
        return view('backend.products.edit', compact('product','productline'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
//        dd($request);
        $product = Product::find($id);

        $product->productName = $request->input('productName');
        $product->productLine = $request->input('productLine');
        $product->descripton = $request->input('descripton');
        $product->quantity = $request->input('quantity');
        $product->price = $request->input('price');
        $product->voucher = $request->input('voucher');

//
//                $file = $request->inputFile;
//        if (!$request->hasFile('inputFile')) {
//            $product->img = $file;
//        } else {
//            $file = $request->file('inputFile');
//            $fileExtension = $file->getClientOriginalExtension();
//            $fileName = $request->inputName;
//            $newFileName = "$fileName.$fileExtension";
//            $request->file('inputFile')->storeAs('public/images', $newFileName);
//            $product->img = $newFileName;
//        }

//        dd(storage_path('app/public/images/'.$request->imgName));
        if (!$request->hasFile('img') && file_exists(storage_path('app/public/images/'.$request->imgName))) {
            $product->img = $request->imgName;
        } else {
            if (file_exists(storage_path('app/public/images/'.$request->imgName))) {
                unlink(storage_path('app/public/images/'.$request->imgName));
            }
            $imageName = time() . '.' . $request->img->getClientOriginalExtension();
            $request->file('img')->storeAs('public/images', $imageName);
            //$request->img->move(storage_path('storage/app/public/images'), $imageName);
            $product->img = $imageName;
        }


        $product->save();
        return redirect()->route('products.list');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect()->route('products.list');
    }


    public function search(Request $request)
    {
        $keyword = $request->input('keyword');
        if ($request->has('productName')){
            return redirect()->route('products.list');
        }
        $products = Product::where('productName', 'LIKE', '%'  . $keyword . '%')->paginate(5);

        $productline = ProductLine::all();
        return view('backend.products.list', compact('products', 'productline'));
    }
}
