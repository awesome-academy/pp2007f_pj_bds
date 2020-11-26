<?php

use Illuminate\Database\Seeder;

class BuyerSellerCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('buyer_seller_categories')->insert([
            'style'=>'Nhà đất cần mua',
            'category'=>'Mua căn hộ chung cư',
        ]);
        DB::table('buyer_seller_categories')->insert([
            'style'=>'Nhà đất cần mua',
            'category'=>'Mua nhà riêng',
        ]);
        DB::table('buyer_seller_categories')->insert([
            'style'=>'Nhà đất cần mua',
            'category'=>'Mua nhà biệt thự, liền kề',
        ]);
        
        DB::table('buyer_seller_categories')->insert([
            'style'=>'Nhà đất cần thuê',
            'category'=>'Cần thuê căn hộ chung cư',
        ]);

        DB::table('buyer_seller_categories')->insert([
            'style'=>'Nhà đất cần thuê',
            'category'=>'Cần thuê nhà riêng',
        ]);
        DB::table('buyer_seller_categories')->insert([
            'style'=>'Nhà đất cần thuê',
            'category'=>'Cần thuê nhà mặt phố',
        ]);
        
    }
}
