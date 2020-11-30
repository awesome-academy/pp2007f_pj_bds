<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Post;
use App\Models\Products;
use App\Models\Image;
use App\Models\Ward;
use App\Models\District;
use App\Models\Province;
use App\Models\menu_categories;
use App\Models\Menu_category;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public $menu_cate;
    
    public function __construct()
    {
        $this->menu_cate = Menu_category::all();
    }

    public function post() {
        $categories = Category::all();
        return view('', compact('categories'));
    }

    public function viewPost() {
        // $post = Products::with('image')->get();
        $post = DB::table('products')
        ->join('images', 'images.products_id', '=' , 'products.id')
        ->join('menu_categories', 'menu_categories.id', '=', 'products.menu_category_id')
        ->select('products.*', 'images.link', 'menu_categories.name')
        ->get();
        return view('admin.posts', compact('post'));
    }

    public function editPost($id) {

        $post = Products::find($id)->with(['post_type', 'ward', 'province', 'district'])->where('products.id', '=', $id)->get();

        // $post = DB::table('products')->where('products.id', '=', $id)
        // ->join('menu_categories', 'menu_categories.id', '=', 'products.menu_category_id')
        // ->join('wards', 'wards.id', '=', 'products.wards_id')
        // ->join('provinces', 'provinces.id', '=', 'products.provinces_id')
        // ->join('districts', 'districts.id', '=', 'products.districts_id')
        // ->select('products.*', 'menu_categories.name', 'wards.name_with_type as ward_name', 'provinces.name_with_type as province_name', 'districts.name_with_type as district_name')
        // ->get();

        $cate = Menu_category::all();
        
        $ward = Ward::all();

        $district = District::all();

        $province = Province::all();

        $post_all = Products::all();

        return view('admin.edit_post', compact('post', 'cate', 'ward', 'district', 'province', 'post_all'));
    }

    public function updatePost(Request $request, $id) {
        // dd($request->toArray());
        $menu_cate = $this->menu_cate;
        $post = Products::with('menu_category')->find($id);
        $post->title = $request->get('title');
        $post->price = $request->get('price');
        $post->area = $request->get('area');
        $post->address = $request->get('address');
        $post->number_of_bedroom = $request->get('bedroom');
        $post->number_of_restroom = $request->get('restroom');
        $post->number_of_floor = $request->get('floor');
        $post->content = $request->get('content');
        // dd($post->menu_category->id );
        $post->menu_category_id = $request->get('cate_name');
        
        $post->save();
        // dd($post->toArray());

        // $cate = Menu_category::all();
        
        // $ward = DB::table('wards')->get();

        // $district = DB::table('districts')->get();

        // $province = DB::table('provinces')->get();

        // $post_all = DB::table('products')->get();
        // $title = $request->title;
        // $cate_name = $request->cate_name;
        // $post = DB::table('products')->where('products.id', '=', $id)
        // ->join('menu_categories', 'menu_categories.id', '=', 'products.menu_category_id')
        // ->select('products.*', 'menu_categories.name')->update(['title'=>$title,
        // 'menu_categories.name'=>$cate_name]);
        return back();
    }
}

