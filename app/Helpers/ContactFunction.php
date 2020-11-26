<?php


function getContact(){
    $image = App\Models\Menu::where('type', 'contact')->where('order', '1')->get();
    $company = App\Models\Menu::where('type', 'contact')->where('order', '2')->get();
    $company2 = App\Models\Menu::where('type', 'contact')->where('order', '3')->get();
    $icon_add = App\Models\Menu::where('type', 'contact')->where('order', '4')->get();
    $add = App\Models\Menu::where('type', 'contact')->where('order', '5')->get();
    $phone_icon = App\Models\Menu::where('type', 'contact')->where('order', '6')->get();
    $phone = App\Models\Menu::where('type', 'contact')->where('order', '7')->get();
    $sign_up = App\Models\Menu::where('type', 'contact')->where('order', '8')->get();
    $facebook = App\Models\Menu::where('type', 'contact')->where('order', '9')->get();
    $youtube = App\Models\Menu::where('type', 'contact')->where('order', '10')->get();
    $zalo = App\Models\Menu::where('type', 'contact')->where('order', '11')->get();
    $all_branch = App\Models\Menu::where('type', 'contact')->where('order', '12')->get();
    $dropdown = App\Models\Menu::where('type', 'contact')->where('order', '13')->get();
    $branch = App\Models\Menu::where('type', 'contact')->where('order', '14')->orWhere('order', '16')
    ->get();

    return view('partial.contact', compact('company', 'image', 'company2',
    'icon_add', 'add', 'phone_icon', 'phone', 'sign_up', 'facebook', 'youtube', 'zalo', 'all_branch', 'dropdown', 'branch'));
}
