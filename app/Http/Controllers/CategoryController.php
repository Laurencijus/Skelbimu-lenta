<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(Request $request)
    {
        $category = new Category();
        $category->name = $request->input('name');
        $category->text = $request->input('text');
        $category->save();
    }
}
