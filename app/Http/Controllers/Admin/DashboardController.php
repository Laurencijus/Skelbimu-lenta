<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    //Dashboard
    public function dashboard()
    {
        return view('admin.dashboard');
        //'categories' => Category::lastCategories(5),
        //'count_categories' => Category::count(),

    }
}
