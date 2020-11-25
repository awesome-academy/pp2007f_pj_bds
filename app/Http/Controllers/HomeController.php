<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;
use App\Models\Menu;

class HomeController extends Controller
{
    public function index() {
        $menus0 = Menu::where('type','header_main')->orderby('order')->get()->toArray();
        $arr_menu = [];
        
        foreach ($menus0 as $menu0) {
            $arr_menu[$menu0['parent_id']][] = $menu0;
        }
        // dd($arr_menu);

        view()->share('menus0', $menus0);
        view()->share('arr_menu', $arr_menu);




        return view('pages.index');
        
    }
}
