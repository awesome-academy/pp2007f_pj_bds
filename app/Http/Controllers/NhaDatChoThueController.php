<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NhaDatChoThueController extends Controller
{
    //
    public function index() {
        $products = DB::table('products')
        ->join('menu_categories', 'menu_categories.id', '=', 'products.menu_category_id')
        ->join('images', 'images.products_id', '=' , 'products.id')
        ->join('wards', 'wards.id', '=', 'products.wards_id')
        ->select('products.*', 'menu_categories.name', 'images.link', 'wards.path_with_type')
        ->where('menu_categories.name', '=', "Cho thuê căn hộ chung cư")
        ->orWhere('menu_categories.name', '=', "Cho thuê nhà riêng")
        ->orWhere('menu_categories.name', '=', "Cho thuê nhà mặt phố")
        ->orderBy('products.id')->get();
        return view("pages.nha_dat_cho_thue.index", compact('products',));
    }

    public function nhaDatChoThueSinglePost($id) {
        $products = DB::table('products')
        ->join('images', 'images.products_id', '=' , 'products.id')
        ->join('menu_categories', 'menu_categories.id', '=', 'products.menu_category_id')
        ->join('wards', 'wards.id', '=', 'products.wards_id')
        ->select('products.*', 'images.link', 'menu_categories.name', 'wards.path_with_type')
        ->where('products.id', '=', $id)->get();

        $product = DB::table('products')
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

        return view("pages.nha_dat_cho_thue.single_post", compact('products', 'product', 'product1'));
    }

    public function choThueCanHo() {
        $products = DB::table('products')
        ->join('images', 'images.products_id', '=' , 'products.id')
        ->join('menu_categories', 'menu_categories.id', '=', 'products.menu_category_id')
        ->join('wards', 'wards.id', '=', 'products.wards_id')
        ->select('products.*', 'images.link', 'menu_categories.name', 'wards.path_with_type')
        ->where('menu_categories.name', '=', "Cho thuê căn hộ chung cư")
        ->get();
        return view("pages.nha_dat_cho_thue.index", compact('products'));
    }

    public function choThueNhaRieng() {
        $products = DB::table('products')
        ->join('images', 'images.products_id', '=' , 'products.id')
        ->join('menu_categories', 'menu_categories.id', '=', 'products.menu_category_id')
        ->join('wards', 'wards.id', '=', 'products.wards_id')
        ->select('products.*', 'images.link', 'menu_categories.name', 'wards.path_with_type')
        ->Where('menu_categories.name', '=', "Cho thuê nhà riêng")
        ->get();
        return view("pages.nha_dat_cho_thue.index", compact('products'));
    }

    public function choThueNhaMatPho() {
        $products = DB::table('products')
        ->join('images', 'images.products_id', '=' , 'products.id')
        ->join('menu_categories', 'menu_categories.id', '=', 'products.menu_category_id')
        ->join('wards', 'wards.id', '=', 'products.wards_id')
        ->select('products.*', 'images.link', 'menu_categories.name', 'wards.path_with_type')
        ->Where('menu_categories.name', '=', "Cho thuê nhà mặt phố")
        ->get();
        return view("pages.nha_dat_cho_thue.index", compact('products'));
    }
}
