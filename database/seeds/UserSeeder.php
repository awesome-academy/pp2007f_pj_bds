<?php

use Illuminate\Database\Seeder;
use App\Models\User;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        $faker->addProvider(new Ottaviano\Faker\Gravatar($faker));
        for ($i = 0; $i < 50; $i++){  
            User::insert([
                'username' => $faker->userName,
                'email' => $faker->email,
                'password' => $faker->password,
                'fullname' => $faker->name ,
                'sex' => rand(0,1),
                'dateofbirth' => $faker->date($format = 'Y-m-d', $max = 'now'),
                'phonenumber' => $faker->phoneNumber,
                'avatar' => $faker->gravatarUrl(),
                'address' => $faker->address,
            ]);
        }
    }
}
