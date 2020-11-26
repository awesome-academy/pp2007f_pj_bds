<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('menus')->insert([
        	'name'=> 'Giấy ĐKKD số 0104630479 do Sở KHĐT TP Hà Nội cấp lần đầu ngày 02/06/2010',
        	'parent_id'=> '0',
        	'slug' =>'' ,
        	'order'=> '1',
        	'type' => 'end-footer',

            ]);

        DB::table('menus')->insert([
        	'name'=> 'Giấy phép GH ICP số 3832/GP-TTĐT do Sở TTTT Hà Nội cấp ngày 08/08/2019',
        	'parent_id'=> '0',
        	'slug' =>'' ,
        	'order'=> '2',
        	'type' => 'end-footer',

            ]);

            
        DB::table('menus')->insert([
            'name'=> 'Chịu trách nhiệm nội dung GP ICP: Bà Đặng Thị Hường',
            'parent_id'=> '1',
            'slug' =>'' ,
            'order'=> '3',
            'type' => 'end-footer',
    
            ]);
        DB::table('menus')->insert([
            'name'=> 'Quy chế, quy định giao dịch có hiệu lực từ 23/02/2020',           
            'parent_id'=> '1',
            'slug' =>'' ,
            'order'=> '4',
            'type' => 'end-footer',
    
            ]);
            
        DB::table('menus')->insert([
            'name'=> 'Copyright © 2007 - 2020 Batdongsan.com.vn',
            'parent_id'=> '2',
            'slug' =>'' ,
            'order'=> '5',
            'type' => 'end-footer',
    
            ]);
        DB::table('menus')->insert([
            'name'=> 'Ghi rõ nguồn "Batdongsan.com.vn" khi phát hành lại thông tin từ website này.',           
            'parent_id'=> '2',
            'slug' =>'' ,
            'order'=> '6',
            'type' => 'end-footer',
    
            ]);
        
        



    
           
    }
}
