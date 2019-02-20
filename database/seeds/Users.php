<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Str;

class Users extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Faker::create();
          //
          for ($i=0; $i < 3; $i++) {
        \DB::table('users')->insert(array(
               'name'  => $faker->firstName,
               'isAdmin'  => $faker->randomElement(['0','1','0']),
                'email'  => Str::random(10).'@gmail.com',
                'password' => bcrypt('secret'),
                'id_escuelas'  => $faker->randomElement(['1','2','3']),
                 'created_at' => date('Y-m-d H:m:s'),
                 'updated_at' => date('Y-m-d H:m:s')
        ));
    }
    }
}
