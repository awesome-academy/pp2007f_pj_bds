<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenuCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('menu_category')->insert([
            ['name' => 'Bán căn hộ chung cư'],
            ['name' => 'Bán nhà riêng'],
            ['name' => 'Bán nhà mặt phố'],
            ['name' => 'Cho thuê hộ chung cư'],
            ['name' => 'Cho thuê nhà riêng'],
            ['name' => 'Cho thuê nhà mặt phố'],

        ]);
    }
}