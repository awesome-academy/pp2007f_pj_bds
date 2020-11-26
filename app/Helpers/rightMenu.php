<?php

use App\Models\Menu;

function getRightMenu()
{
    $menu = Menu::where('type', 'right')->orderBy('order', 'ASC')->get()->toArray();
    $arr_menu = [];
    foreach ($menu as $menu) {
        $arr_menu[$menu['parent_id']][] = $menu;
    }

    return view('menus.rightMenu', compact('arr_menu'));
}
