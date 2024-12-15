<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
class CategoryController extends Controller
{
    public function getCreateCategory(Request $request)
    {
        $c=Category::all();
        return view('backend.category.create-category',compact('c'));
    }
    public function postCreateCategory(Request $request)
    {
        $c=new Category();
        $c->create($request->all());
        return redirect()->route('admin.getAllCategory');
    }
    public function getAllCategory(Request $request)
    {
        $c=Category::all();
        return view('backend.category.all-category',compact('c'));
    }
    public function getCategory(Request $request)
    {
        $c=Category::all();
        return view('index.user-category',compact('c'));
    }
}
