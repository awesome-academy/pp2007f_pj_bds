<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('post_types')->insert([
            'name' => 'tin thường',
            'price' => 2000,
            'unit' => 'đồng/ngày',
        ]);
        DB::table('post_types')->insert([
            'name' => 'tin ưu đãi',
            'price' => 4000,
            'unit' => 'đồng/ngày',
        ]);
        DB::table('post_types')->insert([
            'name' => 'tin vip',
            'price' => 6000,
            'unit' => 'đồng/ngày',
        ]);
        DB::table('post_types')->insert([
            'name' => 'tin vip DB',
            'price' => 10000,
            'unit' => 'đồng/ngày',
        ]);
        $timestamps = true;
    }
}
