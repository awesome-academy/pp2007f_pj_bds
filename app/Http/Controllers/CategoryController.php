<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //
    public function index()
    {
        $categories = Category::get();
        return view('pages.admin.categoriesIndex', compact('categories'));
    }

    public function create()
    {
        
        return view('pages.admin.createCategories');
    }
}
