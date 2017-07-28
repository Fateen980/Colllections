<?php

use Illuminate\Database\Seeder;
use Laracasts\TestDummy\Factory as TestDummy;
use App\collections\User ;
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder
{
    public function run()
    {

            $faker = Faker::create();
            $user  = new User;



        foreach (range(1,10000) as $index) {

        $user->create([

            'id' =>  $faker->unique()->numberBetween($min = 1, $max = 100000),
            'name' => $faker->name,
            'email' => $faker->unique()->email,
            'password' => $faker->password

        ]);

    };

//
    }
}
