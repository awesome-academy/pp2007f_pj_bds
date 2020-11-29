<?php
use App\Models\Menu;
function getMenuSupport(){
    // $huongdan = App\Models\Menu::find(1);
    // $child_hd = Menu::where('parent_id', 1)->get();

    // $quydinh = App\Models\Menu::find(2);
    // $child_qd = Menu::where('parent_id', 2)->get();

    // $tdht = App\Models\Menu::find(3);
    // $child_tdht = Menu::where('parent_id', 3)->get();

    // $quocgia = App\Models\Menu::find(4);
    // $child_qg = Menu::where('parent_id', 4)->get();
    // return view("partial.support", compact('huongdan', 'child_hd', 'quydinh', 'child_qd', 'tdht', 'child_tdht', 'quocgia', 'child_qg'));

    $menu = Menu::where('type', 'support')->orderby('order', 'ASC')->get()->toArray();
    
    $arr_menu = [];
    foreach($menu as $menu) {
        $arr_menu[$menu['parent_id']][] = $menu;
        
    }

    return view("partial.support",compact('arr_menu'));

}

  

