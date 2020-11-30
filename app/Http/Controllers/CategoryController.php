<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\CategoryFromRequest;

class CategoryController extends Controller
{
    //
    public function index()
    {
        $categories = Category::all();
        return view('pages.admin.categoriesIndex', compact('categories'));
    }

    public function create()
    {
        return view('pages.admin.createCategories');
    }

    public function store(CategoryFromRequest $categoryFromRequest){
        $category = new Category();
        $category->category_name = $categoryFromRequest->get('name');
        $category->category_price = $categoryFromRequest->get('price');
        $category->category_unit = $categoryFromRequest->get('unit');
        $category->category_days = $categoryFromRequest->get('days');

        $mess = "";
        if($category->save()){
            $mess = "Successful add new!";
        }

        return view('pages.admin.createCategories', compact('category'))->with('mess', $mess);
    }

    public function edit($id)
    {
        $categories = Category::find($id);
        return view('pages.admin.editCategories', compact('categories'));
    }

    public function update(CategoryFromRequest $request , $id)
    {
        $categories = Category::find($id);
        $categories->category_name = $request->get('name');
        $categories->category_price = $request->get('price');
        $categories->category_unit = $request->get('unit');
        $categories->category_days = $request->get('days');

        $mess = '';
        if($categories->save()){
            $mess = "Successful update!";
        };
        return view('pages.admin.editCategories', compact('categories'))->with('mess', $mess);
    }

    public function delete(Request $request, $id)
    {
        $category = Category::find($id);
        $category->delete();
        return redirect()->route('categoryIndex')->with('mess', 'Deleted successfully!');
    }
}
