<?php
use App\Models\Menu;

function getEndFooter()
{
    $endfooter0 = Menu::where('type','end-footer')->orderBy('order')->get()->toArray();
    $arr_endfooter = [];
    foreach ($endfooter0 as $endfooter) {
        $arr_endfooter[$endfooter['parent_id']][] = $endfooter;
    }
    return view('partial.endfooter',compact('arr_endfooter'));
}; 


?>
