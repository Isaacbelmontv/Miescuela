<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class RedesSociales extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $faker = Faker::create();
        //
        for ($i=0; $i < 3; $i++) {
      \DB::table('redes_sociales')->insert(array(
             'nombre_red_social'  => $faker->randomElement(['Facebook','Twitter','Instagram']),
             'url_red_social'  => $faker->randomElement(['facebook.com','Twitter.com','Instagram.com']),
             'created_at' => date('Y-m-d H:m:s'),
             'updated_at' => date('Y-m-d H:m:s')
      ));
  }
    }
}
