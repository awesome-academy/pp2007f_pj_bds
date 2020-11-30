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
        DB::table('menu_categories')->insert([
            ['name' => 'Bán căn hộ chung cư'],
            ['name' => 'Bán nhà riêng'],
            ['name' => 'Bán nhà mặt phố'],
            ['name' => 'Cho thuê căn hộ chung cư'],
            ['name' => 'Cho thuê nhà riêng'],
            ['name' => 'Cho thuê nhà mặt phố'],
        ]);
    }

       
}
