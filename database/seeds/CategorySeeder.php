<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'category_name' => 'tin thường',
            'category_price' => 2000,
            'category_unit' => 'đồng/ngày',
            'category_days' => 30,
            'created_at' => date('y-m-d h:i:s'),
            'updated_at' => date('y-m-d h:i:s')
        ]);
        DB::table('categories')->insert([
            'category_name' => 'tin ưu đãi',
            'category_price' => 4000,
            'category_unit' => 'đồng/ngày',
            'category_days' => 60,
            'created_at' => date('y-m-d h:i:s'),
            'updated_at' => date('y-m-d h:i:s')
        ]);
        DB::table('categories')->insert([
            'category_name' => 'tin vip',
            'category_price' => 6000,
            'category_unit' => 'đồng/ngày',
            'category_days' => 30,
            'created_at' => date('y-m-d h:i:s'),
            'updated_at' => date('y-m-d h:i:s')
        ]);
        DB::table('categories')->insert([
            'category_name' => 'tin vip DB',
            'category_price' => 10000,
            'category_unit' => 'đồng/ngày',
            'category_days' => 30,
            'created_at' => date('y-m-d h:i:s'),
            'updated_at' => date('y-m-d h:i:s')
        ]);
        $timestamps = true;
    }
}
