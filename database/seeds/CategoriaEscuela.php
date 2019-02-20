<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class CategoriaEscuela extends Seeder
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
        \DB::table('escuela_categoria')->insert(array(
               'nombre_categoria'  => $faker->randomElement(['Primaria','Secundaria','Universidad']),
               'created_at' => date('Y-m-d H:m:s'),
               'updated_at' => date('Y-m-d H:m:s')
        ));
    }
    }
}
