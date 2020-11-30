<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BusinessSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        for ($i = 0; $i < 20; $i++){   
        DB::table('businesses')->insert([
            'name' => $faker->company,
            'address' => $faker->address,
            'mobile' => 'Đang cập nhật',
            'mail' => $faker->companyEmail,
            'website' => 'http://www.pckg.com.vn',
            'content' => $faker->paragraph($nbSentences = 40, $variableNbSentences = true),
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s'),
            ]);
        }
    }
}
