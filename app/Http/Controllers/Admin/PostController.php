<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class PostController extends Controller
{
    public function Index()
    {
        return view('admin.categories.index', [
            'categories' => Category::paginate(10),
        ]);
    }
};
