<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    public function cat_create()
    {
        return view('category.create');
    }
}
