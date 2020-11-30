<?php

use Illuminate\Database\Seeder;

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
            'link'=>'https://masterisehomes.com/masteri-waterfront/storage/media/y343uyYjCKdaLSrx3GHGEsX2gmlasBhlV5sdNkjG.png',
            'name'=>'masterisehomes',
            'slug'=>'https://masterisehomes.com/masteri-waterfront/?utm_source=Nv_BDShotbanner_MASS_B01V&utm_medium=CPD&utm_campaign=nv_masteri_waterfront#intro',
            'type'=>'banner',
            'width'=>'1920',
            'height'=>'560',
            'order'=>'1',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s'),
        ]);

        DB::table('slides')->insert([
            'link'=>'https://batdongsan.com.vn/brc/trieu-lua-chon-nha/assets/HP_2.jpg',
            'name'=>'citylandparkhills.cityland',
            'slug'=>'https://citylandparkhills.cityland.com.vn/?utm_source=batdongsan&utm_medium=HotBanner&utm_campaign=bannerT11',
            'type'=>'banner',
            'width'=>'1920',
            'height'=>'560',
            'order'=>'2',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s'),
        ]);

        DB::table('slides')->insert([
            'link'=>'https://masterisehomes.com/masteri-waterfront/storage/media/ui9UF4TqRCahe1QiHGPYpayElRNwYMWcHx3C15U6.jpeg',
            'name'=>'masterisehomes',
            'slug'=>'https://masterisehomes.com/masteri-waterfront/?utm_source=Nv_BDShotbanner_MASS_B01V&utm_medium=CPD&utm_campaign=nv_masteri_waterfront',
            'type'=>'banner',
            'width'=>'1920',
            'height'=>'560',
            'order'=>'3',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s'),
        ]);

        DB::table('slides')->insert([
            'link'=>'https://vres.batdongsan.com.vn/Content/images/2020/banner_2.jpg',
            'name'=>'batdongsan.com',
            'slug'=>'https://citylandparkhills.cityland.com.vn/?utm_source=batdongsan&utm_medium=HotBanner&utm_campaign=bannerT11',
            'type'=>'banner',
            'width'=>'1920',
            'height'=>'560',
            'order'=>'4',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s'),
        ]);

        DB::table('slides')->insert([
            'link'=>'https://trienlambds.com/wp-content/uploads/2020/11/banner-tlbds-2-1.jpg',
            'name'=>'citylandparkhills',
            'slug'=>'https://trienlambds.com/',
            'type'=>'banner',
            'width'=>'1920',
            'height'=>'560',
            'order'=>'5',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s'),
        ]);

        DB::table('slides')->insert([
            'link'=>'https://file4.batdongsan.com.vn/2020/11/18/UVSXfqBy/20201118171736-2454.jpg',
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
            'link'=>'https://file4.batdongsan.com.vn/2020/11/11/ZBfLmblA/20201111093801-33ac.jpg',
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
            'link'=>'https://ml7oj4fzi8ge.i.optimole.com/0cch1rI-K5I8D-in/w:auto/h:auto/q:auto/https://bconsplaza.bcons.com.vn/wp-content/uploads/2020/11/1_compressed.jpg',
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
            'link'=>'https://file4.batdongsan.com.vn/2020/11/18/UVSXfqBy/20201118171618-1afe.jpg',
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
