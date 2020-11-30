<?php

use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for ($i=0; $i<50; $i++) {
        $faker = Faker\Factory::create();
        DB::table('products')->insert ([
        'title' => $faker->sentence,
        'type' => rand(0,2),
        'post_type_id' => rand(1, 4),
        'price' => rand(1, 10),
        'area' => rand(20, 200),
        'image_id' => rand(1, 50),
        'views' => rand(100,1000),
        'slug' => rand(1, 100000),
        'number_of_bedroom' => rand(1, 5),
        'number_of_restroom' => rand(1, 3),
        'number_of_floor' => rand(1, 5),
        'address' => $faker->address,
        'content' => $faker->paragraph($nbSentences = 40, $variableNbSentences = true),
        'provinces_id' => rand(1, 64),
        'districts_id' => rand(1, 100),
        'wards_id' => rand(1, 200),
        'menu_category_id' => rand(1,6),
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s'),
        ]);
    }
}
}
