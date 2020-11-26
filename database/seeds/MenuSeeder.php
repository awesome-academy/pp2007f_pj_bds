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
        	'parent_id'=> '7',
        	'slug' =>'' ,
        	'order'=> '1',
        	'type' => 'end-footer',

            ]);

        DB::table('menus')->insert([
        	'name'=> 'Giấy phép GH ICP số 3832/GP-TTĐT do Sở TTTT Hà Nội cấp ngày 08/08/2019',
        	'parent_id'=> '7',
        	'slug' =>'' ,
        	'order'=> '2',
        	'type' => 'end-footer',

            ]);

            
        DB::table('menus')->insert([
            'name'=> 'Chịu trách nhiệm nội dung GP ICP: Bà Đặng Thị Hường',
            'parent_id'=> '8',
            'slug' =>'' ,
            'order'=> '3',
            'type' => 'end-footer',
    
            ]);
        DB::table('menus')->insert([
            'name'=> 'Quy chế, quy định giao dịch có hiệu lực từ 23/02/2020',           
            'parent_id'=> '8',
            'slug' =>'' ,
            'order'=> '4',
            'type' => 'end-footer',
    
            ]);
            
        DB::table('menus')->insert([
            'name'=> 'Copyright © 2007 - 2020 Batdongsan.com.vn',
            'parent_id'=> '9',
            'slug' =>'' ,
            'order'=> '5',
            'type' => 'end-footer',
    
            ]);
        DB::table('menus')->insert([
            'name'=> 'Ghi rõ nguồn "Batdongsan.com.vn" khi phát hành lại thông tin từ website này.',           
            'parent_id'=> '9',
            'slug' =>'' ,
            'order'=> '6',
            'type' => 'end-footer',
    
        ]);
        DB::table('menus')->insert([
            'name'=> 'cot1',           
            'parent_id'=> '0',
            'slug' =>'' ,
            'order'=> '1',
            'type' => 'end-footer',
        
                ]);
        DB::table('menus')->insert([
            'name'=> 'cot2.',           
            'parent_id'=> '0',
            'slug' =>'' ,
            'order'=> '2',
            'type' => 'end-footer',
    
            ]);

        DB::table('menus')->insert([
            'name'=> 'cot3',           
            'parent_id'=> '0',
            'slug' =>'' ,
            'order'=> '2',
            'type' => 'end-footer',
    
            ]);
        
        



    
           
        //insert Support Menu

        DB::table('menus')->insert([
        	'name'=> 'HƯỚNG DẪN',
        	'parent_id'=>'0',
        	'slug' => '',
        	'order'=> '1',
        	'type' => 'Support',

            ]);
            
            DB::table('menus')->insert([
                'name'=> 'QUY ĐỊNH',
                'parent_id'=>'0',
                'slug' => '',
                'order'=> '2',
                'type' => 'Support',
    
            ]);

            DB::table('menus')->insert([
                'name'=> 'TỔNG ĐÀI HỖ TRỢ',
                'parent_id'=>'0',
                'slug' => '',
                'order'=> '3',
                'type' => 'Support',
    
            ]);

            DB::table('menus')->insert([
                'name'=> 'QUỐC GIA',
                'parent_id'=>'0',
                'slug' => '',
                'order'=> '4',
                'type' => 'Support',
    
            ]);

            DB::table('menus')->insert([
                'name'=> 'Báo giá & hỗ trợ',
                'parent_id'=>'1',
                'slug' => 'bao-gia-quang-cao',
                'order'=> '1',
                'type' => 'Support',
    
            ]);

            DB::table('menus')->insert([
                'name'=> 'Câu hỏi thường gặp',
                'parent_id'=>'1',
                'slug' => 'nhung-cau-hoi-thuong-gap',
                'order'=> '2',
                'type' => 'Support',
    
            ]);

            DB::table('menus')->insert([
                'name'=> 'Về chúng tôi',
                'parent_id'=>'1',
                'slug' => 'gioi-thieu',
                'order'=> '3',
                'type' => 'Support',
    
            ]);
            DB::table('menus')->insert([
                'name'=> 'Thông báo',
                'parent_id'=>'1',
                'slug' => 've-batdongsancomvn',
                'order'=> '4',
                'type' => 'Support',
    
            ]);

            DB::table('menus')->insert([
                'name'=> 'Liên hệ',
                'parent_id'=>'1',
                'slug' => 'lien-he',
                'order'=> '5',
                'type' => 'Support',
    
            ]);

            DB::table('menus')->insert([
                'name'=> 'Sitemap',
                'parent_id'=>'1',
                'slug' => 'trang-sitemap',
                'order'=> '6',
                'type' => 'Support',
    
            ]);

            DB::table('menus')->insert([
                'name'=> 'Quy định đăng tin',
                'parent_id'=>'2',
                'slug' => 'quy-dinh-dang-tin',
                'order'=> '1',
                'type' => 'Support',
    
            ]);

            DB::table('menus')->insert([
                'name'=> 'Quy chế hoạt động',
                'parent_id'=>'2',
                'slug' => 'quy-dinh-su-dung',
                'order'=> '2',
                'type' => 'Support',
    
            ]);

            DB::table('menus')->insert([
                'name'=> 'Điều khoản thỏa thuận',
                'parent_id'=>'2',
                'slug' => 'dieu-khoan-thoa-thuan',
                'order'=> '3',
                'type' => 'Support',
    
            ]);

            DB::table('menus')->insert([
                'name'=> 'Chính sách bảo mật',
                'parent_id'=>'2',
                'slug' => 'chinh-sach-bao-mat-thong-tin',
                'order'=> '4',
                'type' => 'Support',
    
            ]);

            DB::table('menus')->insert([
                'name'=> 'Giải quyết khiếu nại',
                'parent_id'=>'2',
                'slug' => 'giai-quyet-khieu-nai',
                'order'=> '5',
                'type' => 'Support',
    
            ]);

            DB::table('menus')->insert([
                'name'=> 'Góp ý báo lỗi',
                'parent_id'=>'2',
                'slug' => 'shrbaUORGfT7arZVJ',
                'order'=> '6',
                'type' => 'Support',
    
            ]);

            

            DB::table('menus')->insert([
                'name'=> 'Tổng đài CSKH: 1900 1881',
                'parent_id'=>'3',
                'slug' => 'https://file4.batdongsan.com.vn/images/newhome/hotline.png',
                'order'=> '7',
                'type' => 'Support',
    
            ]);

           

            DB::table('menus')->insert([
                'name'=> 'hotro@batdongsan.com.vn',
                'parent_id'=>'3',
                'slug' => 'https://file4.batdongsan.com.vn/images/newhome/email.png',
                'order'=> '9',
                'type' => 'Support',
    
            ]);


            DB::table('menus')->insert([
                'name'=> 'cskh@batdongsan.com.vn',
                'parent_id'=>'3',
                'slug' => 'https://file4.batdongsan.com.vn/images/newhome/icon3x/ic_mailbox1.png',
                'order'=> '11',
                'type' => 'Support',
    
            ]);

            DB::table('menus')->insert([
                'name'=> 'Chọn quốc gia',
                'parent_id'=>'4',
                'slug' => '',
                'order'=> '1',
                'type' => 'Support',
    
            ]);

            DB::table('menus')->insert([
                'name'=> 'Chọn ngôn ngữ',
                'parent_id'=>'4',
                'slug' => '',
                'order'=> '2',
                'type' => 'Support',
    
            ]);

            DB::table('menus')->insert([
                'name'=> 'english.html',
                'parent_id'=>'4',
                'slug' => '',
                'order'=> '3',
                'type' => 'Support',
    
            ]);

            DB::table('menus')->insert([
                'name'=> 'Tải ứng dụng Batdongsan.com.vn',
                'parent_id'=>'0',
                'slug' => '',
                'order'=> '5',
                'type' => 'Support',
    
            ]);

            DB::table('menus')->insert([
                'name'=> 'https://file4.batdongsan.com.vn/images/newhome/google-play.png',
                'parent_id'=>'5',
                'slug' => '',
                'order'=> '1',
                'type' => 'Support',
    
            ]);

            DB::table('menus')->insert([
                'name'=> 'https://file4.batdongsan.com.vn/images/newhome/apple-app-store.png',
                'parent_id'=>'5',
                'slug' => '',
                'order'=> '2',
                'type' => 'Support',
    
            ]);

            DB::table('menus')->insert([
                'name'=> 'Đăng kí ngay để nhận thông tin từ Batdongsan.com.vn',
                'parent_id'=>'0',
                'slug' => '',
                'order'=> '6',
                'type' => 'Support',
    
            ]);

            DB::table('menus')->insert([
                'name'=> 'Nhập email của bạn',
                'parent_id'=>'6',
                'slug' => '',
                'order'=> '1',
                'type' => 'Support',
    
            ]);

            DB::table('menus')->insert([
                'name'=> 'Gửi',
                'parent_id'=>'6',
                'slug' => '',
                'order'=> '2',
                'type' => 'Support',
    
            ]);

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
   	
        //
        
    }
           