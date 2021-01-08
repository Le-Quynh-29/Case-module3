<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\ProductLine;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductLineController extends Controller
{
    public function index()
    {
        $productline = ProductLine::paginate(2);
        return view('backend.productline.list', compact('productline'));
    }

    public function create()
    {
        $productline = ProductLine::all();
        return view('backend.productline.create', compact('productline'));

    }

    public function store(Request $request)
    {
        $productline = new ProductLine();
        $productline->id = $request->id;

        $productline->description = $request->description;

        $file = $request->inputFile;
        if (!$request->hasFile('inputFile')) {
            $productline->img = $file;
        } else {
            $file = $request->file('inputFile');
            $fileExtension = $file->getClientOriginalExtension();
            $fileName = $request->inputName;
            $newFileName = "$fileName.$fileExtension";
            $request->file('inputFile')->storeAs('public/images', $newFileName);
            $productline->img = $newFileName;
        }

        $productline->save();

        return redirect()->route('productline.list');

    }

    public function destroy($id)
    {
        $productline = ProductLine::find($id);
        $productline->Product()->delete();
        $productline->delete();
        return redirect()->route('productline.list');
    }

    public function edit($id)
    {
        $productline = ProductLine::findOrFail($id);
        return view('backend.productline.edit', compact('productline'));
    }

    public function update(Request $request, $id)
    {
        $productline = ProductLine::find($id);
        $productline->fill($request->all());

        if (!$request->hasFile('img') && file_exists(storage_path('app/public/images/'.$request->imgName))) {
            $productline->img = $request->imgName;
        } else {
            if (file_exists(storage_path('app/public/images/'.$request->imgName))) {
                unlink(storage_path('app/public/images/'.$request->imgName));
            }
            $imageName = time() . '.' . $request->img->getClientOriginalExtension();
            $request->file('img')->storeAs('public/images', $imageName);
            //$request->img->move(storage_path('storage/app/public/images'), $imageName);
            $productline->img = $imageName;
        }


        $productline->save();
        return redirect()->route('productline.list');
    }

}
