<?php

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Crypt;

class UserSeeder extends Seeder

{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        


        $role1 = Role::where('slug','admin')->first();
        $role2 = Role::where('slug','member')->first();
        $role3 = Role::where('slug','customers')->first();


        $faker = Faker\Factory::create();
        $faker->addProvider(new Ottaviano\Faker\Gravatar($faker)); 
        $user0 = User::create([
            'username' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('123456'),
            'fullname' => 'kviet91' ,
            'account' => rand(100,1000)*1000,
            'sex' => rand(0,1),
            'dateofbirth' => $faker->date($format = 'Y-m-d', $max = 'now'),
            'phonenumber' => $faker->phoneNumber,
            'avatar' => $faker->gravatarUrl(),
            'address' => $faker->address,
        ]);
        $user0->roles()->attach($role1);

        $user1 = User::create([
            'username' => 'member',
            'email' => 'member@gmail.com',
            'password' => bcrypt('123456'),
            'fullname' => 'kviet91' ,
            'account' => rand(100,1000)*1000,
            'sex' => rand(0,1),
            'dateofbirth' => $faker->date($format = 'Y-m-d', $max = 'now'),
            'phonenumber' => $faker->phoneNumber,
            'avatar' => $faker->gravatarUrl(),
            'address' => $faker->address,
        ]);
        $user1->roles()->attach($role2);
        for($i=2;$i<1000;$i++) {
            $user3 = User::create([
                'username' => $faker->userName,
                'email' => $faker->email,
                'password' => bcrypt('123456'),
                'fullname' => 'kviet91' ,
                'account' => rand(100,1000)*1000,
                'sex' => rand(0,1),
                'dateofbirth' => $faker->date($format = 'Y-m-d', $max = 'now'),
                'phonenumber' => $faker->phoneNumber,
                'avatar' => $faker->gravatarUrl(),
                'address' => $faker->address,
            ]);
            $user3->roles()->attach($role2);
        };
    
    }
}
