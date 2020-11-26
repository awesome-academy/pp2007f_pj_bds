<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;


class NhaDatBanController extends Controller
{
    //

    public function index() {
        $products = DB::table('products')
        ->join('menu_category', 'menu_category.id', '=', 'products.menu_category_id')
        ->join('image', 'image.products_id', '=' , 'products.id')
        ->join('wards', 'wards.id', '=', 'products.wards_id')
        ->select('products.*', 'menu_category.name', 'image.link', 'wards.path_with_type')
        ->where('menu_category.name', '=', "Bán căn hộ chung cư")
        ->orWhere('menu_category.name', '=', "Bán nhà riêng")
        ->orWhere('menu_category.name', '=', "Bán nhà mặt phố")
        ->orderBy('products.id', 'asc')->paginate(10);
        return view("pages.nhadatban.index", compact('products',));

    }

    public function nhaDatBanSinglePost($id) {
        $products = DB::table('products')->where('products.id', '=', $id)
        ->join('image', 'image.products_id', '=' , 'products.id')
        ->join('menu_category', 'menu_category.id', '=', 'products.menu_category_id')
        ->join('wards', 'wards.id', '=', 'products.wards_id')
        ->select('products.*', 'image.link', 'menu_category.name', 'wards.path_with_type')
        ->get();

        $product = DB::table('products')
        ->join('image', 'image.products_id', '=' , 'products.id')
        ->join('wards', 'wards.id', '=', 'products.wards_id')
        ->select('products.*', 'image.link', 'wards.path_with_type')
        ->limit(5)
        ->get();

        $product1 = DB::table('products')
        ->join('image', 'image.products_id', '=' , 'products.id')
        ->join('wards', 'wards.id', '=', 'products.wards_id')
        ->select('products.*', 'image.link', 'wards.path_with_type')
        ->limit(5)
        ->get();

        return view("pages.nhadatban.single_post", compact('products', 'product', 'product1'));

    }

    public function banCanHoChungCu() {
        $products = DB::table('products')
        ->join('image', 'image.products_id', '=' , 'products.id')
        ->join('menu_category', 'menu_category.id', '=', 'products.menu_category_id')
        ->join('wards', 'wards.id', '=', 'products.wards_id')
        ->select('products.*', 'image.link', 'menu_category.name', 'wards.path_with_type')
        ->where('menu_category.name', '=', "Bán căn hộ chung cư")
        ->get();
        return view("pages.nhadatban.index", compact('products'));
    }

    public function banNhaRieng() {
        $products = DB::table('products')
        ->join('image', 'image.products_id', '=' , 'products.id')
        ->join('menu_category', 'menu_category.id', '=', 'products.menu_category_id')
        ->join('wards', 'wards.id', '=', 'products.wards_id')
        ->select('products.*', 'image.link', 'menu_category.name', 'wards.path_with_type')
        ->Where('menu_category.name', '=', "Bán nhà riêng")
        ->get();
        return view("pages.nhadatban.index", compact('products'));
    }

    public function banNhaMatPho() {
        $products = DB::table('products')
        ->join('image', 'image.products_id', '=' , 'products.id')
        ->join('menu_category', 'menu_category.id', '=', 'products.menu_category_id')
        ->join('wards', 'wards.id', '=', 'products.wards_id')
        ->select('products.*', 'image.link', 'menu_category.name', 'wards.path_with_type')
        ->Where('menu_category.name', '=', "Bán nhà mặt phố")
        ->get();
        return view("pages.nhadatban.index", compact('products'));
    }

}
