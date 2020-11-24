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
        //
        DB::table('menus')->insert([
        	'name'=> 'Nhà đất bán',
        	'parent_id'=> '0',
        	'slug' => 'nha-dat-ban',
        	'order'=> 1,
        	'type' => 'header_main'
        ]);

        DB::table('menus')->insert([
        	'name'=> 'Nhà đất cho thuê',
        	'parent_id'=> '0',
        	'slug' => 'nha-dat-cho-thue',
        	'order'=> 2,
        	'type' => 'header_main'
        ]);
        
        DB::table('menus')->insert([
        	'name'=> 'Cần mua - Cần thuê',
        	'parent_id'=> '0',
        	'slug' => 'can-mua-can-thue',
        	'order'=> 3,
        	'type' => 'header_main'
        ]);

        DB::table('menus')->insert([
        	'name'=> 'Nhà đất cần mua',
        	'parent_id'=> '3',
        	'slug' => 'nha-dat-can-mua',
        	'order'=> 1,
        	'type' => 'header_main'
        ]);

        DB::table('menus')->insert([
        	'name'=> 'Nhà đất cần thuê',
        	'parent_id'=> '3',
        	'slug' => 'nha-dat-can-thue',
        	'order'=> 2,
        	'type' => 'header_main'
        ]);

        DB::table('menus')->insert([
        	'name'=> 'Mua căn hộ chung cư',
        	'parent_id'=> '4',
        	'slug' => 'mua-can-ho-chung-cu',
        	'order'=> 1,
        	'type' => 'header_main'
        ]);

        DB::table('menus')->insert([
        	'name'=> 'Mua nhà riêng',
        	'parent_id'=> '4',
        	'slug' => 'mua-nha-rieng',
        	'order'=> 2,
        	'type' => 'header_main'
        ]);
        // insert right menu
        DB::table('menus')->insert([
            'name' => 'Lọc theo khoảng giá',
            'parent_id' => '0',
            'slug' => '',
            'order' => '1',
            'type' => 'right',
            'created_at' => date('y-m-d h:i:s'),
            'updated_at' => date('y-m-d h:i:s')

        ]);

        DB::table('menus')->insert([
            'name' => 'Lọc theo diện tích',
            'parent_id' => '0',
            'slug' => '',
            'order' => '2',
            'type' => 'right',
            'created_at' => date('y-m-d h:i:s'),
            'updated_at' => date('y-m-d h:i:s')

        ]);

        DB::table('menus')->insert([
            'name' => 'Mua bán nhà đất',
            'parent_id' => '0',
            'slug' => '',
            'order' => '3',
            'type' => 'right',
            'created_at' => date('y-m-d h:i:s'),
            'updated_at' => date('y-m-d h:i:s')

        ]);
        DB::table('menus')->insert([
            'name' => 'Hỗ trợ tiện ích',
            'parent_id' => '0',
            'slug' => '',
            'order' => '4',
            'type' => 'right',
            'created_at' => date('y-m-d h:i:s'),
            'updated_at' => date('y-m-d h:i:s')

        ]);

        DB::table('menus')->insert([
            'name' => '500 - 800 triệu',
            'parent_id' => '1',
            'slug' => '500-800-trieu',
            'order' => '1',
            'type' => 'right',
            'created_at' => date('y-m-d h:i:s'),
            'updated_at' => date('y-m-d h:i:s')

        ]);

        DB::table('menus')->insert([
            'name' => '800 triệu - 1 tỷ',
            'parent_id' => '1',
            'slug' => '800-trieu-1-ty',
            'order' => '2',
            'type' => 'right',
            'created_at' => date('y-m-d h:i:s'),
            'updated_at' => date('y-m-d h:i:s')

        ]);

        DB::table('menus')->insert([
            'name' => '<= 30 m2',
            'parent_id' => '2',
            'slug' => '<=30m2',
            'order' => '1',
            'type' => 'right',
            'created_at' => date('y-m-d h:i:s'),
            'updated_at' => date('y-m-d h:i:s')

        ]);

        DB::table('menus')->insert([
            'name' => '30 - 50 m2',
            'parent_id' => '2',
            'slug' => '30 - 50 m2',
            'order' => '2',
            'type' => 'right',
            'created_at' => date('y-m-d h:i:s'),
            'updated_at' => date('y-m-d h:i:s')

        ]);

        DB::table('menus')->insert([
            'name' => 'Dự tính chi phí làm nhà ',
            'parent_id' => '4',
            'slug' => 'du-tinh-chi-phi-lam-nha',
            'order' => '1',
            'type' => 'right',
            'created_at' => date('y-m-d h:i:s'),
            'updated_at' => date('y-m-d h:i:s')

        ]);

        DB::table('menus')->insert([
            'name' => 'Tính lãi suất ',
            'parent_id' => '4',
            'slug' => 'tinh-lai-suat',
            'order' => '2',
            'type' => 'right',
            'created_at' => date('y-m-d h:i:s'),
            'updated_at' => date('y-m-d h:i:s')

        ]);

        DB::table('menus')->insert([
            'name' => 'Quy trình xây nhà',
            'parent_id' => '4',
            'slug' => 'quy-trinh-xay-nha',
            'order' => '3',
            'type' => 'right',
            'created_at' => date('y-m-d h:i:s'),
            'updated_at' => date('y-m-d h:i:s')

        ]);
        //
        // $faker = Faker\Factory::create();
        // for ($i=0; $i<10; $i++) {
        // DB::table('menus')->insert([
        // 	'name'=> $faker->word,
        // 	'parent_id'=> rand(0,10),
        // 	'slug' => $faker->slug,
        // 	'order'=> rand(1,5),
        // 	'type' => $faker->word,
        // 	]);
		// }
           
           DB::table('menus')->insert([
        	['name'=> 'Contact Image',
        	'parent_id'=> '0',
        	'slug' => '',
        	'order'=> '1',
            'type' => 'contact'],
            
            ['name'=> 'Công ty Cổ phần PropertyGuru Việt Nam',
        	'parent_id'=> '0',
        	'slug' => '',
        	'order'=> '2',
            'type' => 'contact'],

            ['name'=> 'Một thành viên của tập đoàn PropertyGuru',
        	'parent_id'=> '1',
        	'slug' => 'https://www.propertygurugroup.com/',
        	'order'=> '3',
            'type' => 'contact'],

            ['name'=> 'Address Icon',
        	'parent_id'=> '1',
        	'slug' => 'https://file4.batdongsan.com.vn/images/newhome/placeholder-line.png',
        	'order'=> '4',
            'type' => 'contact'],

            ['name'=> 'Tầng 31, Keangnam Hanoi Landmark, Phạm Hùng, Nam Từ Liêm, Hà Nội',
        	'parent_id'=> '0',
        	'slug' => '',
        	'order'=> '5',
            'type' => 'contact'],

            ['name'=> 'Phone Icon',
        	'parent_id'=> '1',
        	'slug' => 'https://file4.batdongsan.com.vn/images/newhome/phone-call.png',
        	'order'=> '6',
            'type' => 'contact'],

            ['name'=> '(024) 3562 5939 - (024) 3562 5940',
        	'parent_id'=> '0',
        	'slug' => '',
        	'order'=> '7',
            'type' => 'contact'],

            ['name'=> 'Sign Up Icon',
        	'parent_id'=> '0',
        	'slug' => 'https://file4.batdongsan.com.vn/images/newhome/da-dang-ki-bct.png',
        	'order'=> '8',
            'type' => 'contact'],

            ['name'=> 'Facbook Icon',
        	'parent_id'=> '0',
        	'slug' => 'https://file4.batdongsan.com.vn/images/newhome/fb.png',
        	'order'=> '9',
            'type' => 'contact'],

            ['name'=> 'Youtube Icon',
        	'parent_id'=> '0',
        	'slug' => 'https://file4.batdongsan.com.vn/images/newhome/youtube.png',
        	'order'=> '10',
            'type' => 'contact'],

            ['name'=> 'Zalo Icon',
        	'parent_id'=> '0',
        	'slug' => 'https://file4.batdongsan.com.vn/images/newhome/zalo2.png',
        	'order'=> '11',
            'type' => 'contact'],

            ['name'=> 'Xem tất cả chi nhánh của Batdongsan.com.vn',
        	'parent_id'=> '0',
        	'slug' => '',
        	'order'=> '12',
            'type' => 'contact'],

            ['name'=> 'Dropdown Icon',
        	'parent_id'=> '1',
        	'slug' => '',
        	'order'=> '13',
            'type' => 'contact'],

            ['name'=> 'Chi nhánh TP. Hồ Chí Minh',
        	'parent_id'=> '1',
        	'slug' => 'Tầng 8, Tòa nhà Xổ số Kiến thiết (Lottery Tower), Số 77 Trần Nhân Tôn, Phường 9, Quận 5, TP. Hồ Chí Minh<br>Điện thoại: 0904 893 279',
        	'order'=> '14',
            'type' => 'contact'],

            ['name'=> 'Văn phòng Quận 1 TP. Hồ Chí Minh',
        	'parent_id'=> '1',
        	'slug' => 'Tầng 9, tòa nhà Vĩnh Trung Plaza, số 255 – 257 Hùng Vương, phường Vĩnh Trung, quận Thanh Khê, TP. Đà Nẵng<br>Điện thoại: (0236) 3 666 968 - Mobile: 0904 907 279',
        	'order'=> '16',
            'type' => 'contact'],
        	]);
    }
           







}

