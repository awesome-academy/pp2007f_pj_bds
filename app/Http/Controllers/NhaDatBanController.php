<?php

namespace App\Http\Controllers;

use App\Models\Products;
use App\Models\Province;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;


class NhaDatBanController extends Controller
{
    //

    public function index() {
        $products = Products::paginate(15)
        ->whereIn('menu_category_id', array(1, 2, 3));
        $provinces = Province::all()->sortByDesc('count_posts');
        $count_products = Products::all()->count();
        return view("pages.nhadatban.index", compact('products', 'provinces', 'count_products'));
    }

    public function nhaDatBanSinglePost($id) {
        $products = DB::table('products')->where('products.id', '=', $id)
        ->join('images', 'images.products_id', '=' , 'products.id')
        ->join('menu_categories', 'menu_categories.id', '=', 'products.menu_category_id')
        ->join('wards', 'wards.id', '=', 'products.wards_id')
        ->select('products.*', 'images.link', 'menu_categories.name', 'wards.path_with_type')
        ->get();

        $product2 = DB::table('products')
        ->join('images', 'images.products_id', '=' , 'products.id')
        ->join('wards', 'wards.id', '=', 'products.wards_id')
        ->select('products.*', 'images.link', 'wards.path_with_type')
        ->limit(5)
        ->get();

        $product1 = DB::table('products')
        ->join('images', 'images.products_id', '=' , 'products.id')
        ->join('wards', 'wards.id', '=', 'products.wards_id')
        ->select('products.*', 'images.link', 'wards.path_with_type')
        ->limit(5)
        ->get();

        return view("pages.nhadatban.single_post", compact('products', 'product2', 'product1'));

    }

    public function banCanHoChungCu() {
        $products = DB::table('products')
        ->join('images', 'images.products_id', '=' , 'products.id')
        ->join('menu_categories', 'menu_categories.id', '=', 'products.menu_category_id')
        ->join('wards', 'wards.id', '=', 'products.wards_id')
        ->select('products.*', 'images.link', 'menu_categories.name', 'wards.path_with_type')
        ->where('menu_categories.name', '=', "Bán căn hộ chung cư")
        ->get();
        return view("pages.nhadatban.index", compact('products'));
    }

    public function banNhaRieng() {
        $products = DB::table('products')
        ->join('images', 'images.products_id', '=' , 'products.id')
        ->join('menu_categories', 'menu_categories.id', '=', 'products.menu_category_id')
        ->join('wards', 'wards.id', '=', 'products.wards_id')
        ->select('products.*', 'images.link', 'menu_categories.name', 'wards.path_with_type')
        ->Where('menu_categories.name', '=', "Bán nhà riêng")
        ->get();
        return view("pages.nhadatban.index", compact('products'));
    }

    public function banNhaMatPho() {
        $products = DB::table('products')
        ->join('images', 'images.products_id', '=' , 'products.id')
        ->join('menu_categories', 'menu_categories.id', '=', 'products.menu_category_id')
        ->join('wards', 'wards.id', '=', 'products.wards_id')
        ->select('products.*', 'images.link', 'menu_categories.name', 'wards.path_with_type')
        ->Where('menu_categories.name', '=', "Bán nhà mặt phố")
        ->get();
        return view("pages.nhadatban.index", compact('products'));
    }

    public function district($slug) {
        return view("pages.nhadatban.index");
    }

    public function filterMuaBanNhaDat($id)
    {
        $provinces_id = Province::where('slug', $id)->get('id')->toArray();
        $provinces_name = Province::where('slug', $id)->get('name')->toArray();
        $provinces = Province::all()->sortByDesc('count_posts');
        $products = Products::where('provinces_id', $provinces_id)->get();
        $count_products = Products::where('provinces_id', $provinces_id)->count();
        return view('pages.nhadatban.index', compact('products', 'provinces', 'provinces_name', 'count_products'));
    }

}
