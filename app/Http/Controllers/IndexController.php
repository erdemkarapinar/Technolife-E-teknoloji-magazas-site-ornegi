<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Storage;
use Image;
class IndexController extends Controller
{
    public function getIndex(Request $request)
    {
        $product=Product::all();
        return view('index.index',compact('product'));
    }
}
