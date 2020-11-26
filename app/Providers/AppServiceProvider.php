<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use App\Models\Menu;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $menus0 = Menu::where('type','header_main')->orderby('order')->get()->toArray();
        $arr_menu = [];

        foreach ($menus0 as $menu0) {
            $arr_menu[$menu0['parent_id']][] = $menu0;
        }
        // dd($arr_menu);

        view()->share('menus0', $menus0);
        view()->share('arr_menu', $arr_menu);
    }
}
