<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class SlideSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('slides')->insert([
            'link'=>'banner1.png',
            'name'=>'masterisehomes',
            'slug'=>'https://file4.batdongsan.com.vn/Banners/PhuongNTM/PhuongNTM/1920x560/20201106-0955/',
            'type'=>'banner',
            'width'=>'1920',
            'height'=>'560',
            'order'=>'1',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s'),
        ]);

    

        DB::table('slides')->insert([
            'link'=>'banner5.jpg',
            'name'=>'citylandparkhills',
            'slug'=>'https://trienlambds.com/',
            'type'=>'banner',
            'width'=>'1920',
            'height'=>'560',
            'order'=>'2',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s'),
        ]);

        DB::table('slides')->insert([
            'link'=>'sidebar1.jpg',
            'name'=>'VRES',
            'slug'=>'https://vres.batdongsan.com.vn/?utm_source=BDS&utm_medium=banner&utm_campaign=vres2020',
            'type'=>'sidebar',
            'width'=>'250',
            'height'=>'250',
            'order'=>'6',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s'),
        ]);

        DB::table('slides')->insert([
            'link'=>'sidebar2.jpg',
            'name'=>'AVPE',
            'slug'=>'https://avpe.propertyguru.com.my/?lang=vn',
            'type'=>'sidebar',
            'width'=>'250',
            'height'=>'250',
            'order'=>'7',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s'),
        ]);

        DB::table('slides')->insert([
            'link'=>'content1.jpg',
            'name'=>'Bcons Plaza',
            'slug'=>'https://bconsplaza.bcons.com.vn/?utm_source=batdongsan&utm_medium=cpc&utm_campaign=bds',
            'type'=>'content',
            'width'=>'1120',
            'height'=>'250',
            'order'=>'8',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s'),
        ]);

        DB::table('slides')->insert([
            'link'=>'content2.jpg',
            'name'=>'VRES',
            'slug'=>'https://vres.batdongsan.com.vn/?utm_source=BDS&utm_medium=banner&utm_campaign=vres2020',
            'type'=>'content',
            'width'=>'1120',
            'height'=>'250',
            'order'=>'9',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s'),
        ]);
    }
    
}
