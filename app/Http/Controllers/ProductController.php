<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use Storage;
use Image;
class ProductController extends Controller
{
    public function getCreateProduct(Request $request)
    {
        $category=Category::all();
        return view('backend.product.create-product',compact('category'));

    }
    public function postCreateProduct(Request $request)
    {
     $p= new Product();
     if ($request->hasFile('image')) {
        $image = $request->file('image');

        $fileName = uniqid() . '.' . $image->getClientOriginalExtension();
        $img = Image::make($image->getRealPath());

        $img->stream();
            // <-- Key point

            //dd();
        Storage::disk('public')->put('content' . '/' . $fileName, $img, 'public');

        $request['p_image'] = $fileName;

    }
    $p->create($request->all());
    return redirect()->route('admin.getAllProduct');
}
public function getAllProduct(Request $request)
{
    $p=Product::all();
    $c=Category::all();
    return view('backend.product.all-product',compact('p','c'));
}
public function getProduct(Request $request)
{
    $p=Product::all();
    return view('index.user-product',compact('p'));
}

public function getUpdateProduct(Request $request)
{
    $p=Product::find($request->id);
    $c=Category::all();
    return view('backend.product.update-product',compact('p','c'));
}
public function postUpdateProduct(Request $request)
{
    $p=Product::find($request->id);
    if ($request->hasFile('image')) {
        $image = $request->file('image');

        $fileName = uniqid() . '.' . $image->getClientOriginalExtension();
        $img = Image::make($image->getRealPath());

        $img->stream();
            // <-- Key point

            //dd();
        Storage::disk('public')->put('content' . '/' . $fileName, $img, 'public');

        $request['p_image'] = $fileName;

    }
    $p->update($request->all());
    return redirect()->route('admin.getAllProduct');
}
public function getDeleteProduct(Request $request)
{
    $p=Product::find($request->id);
    $p->delete();
    return redirect()->route('admin.getAllProduct');
}
}
