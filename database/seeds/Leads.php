<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class Leads extends Seeder
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
                $faker = Faker::create();
                  //
                  for ($i=0; $i < 10; $i++) {
                \DB::table('leads')->insert(array(
                       'nombre_completo'  => $faker->randomElement(['Juan','Manuel','Pedro']),
                       'edad'  => $faker->randomElement(['20','30','40']),
                       'telefono'  => $faker->randomElement(['55555555','66666666','77777777']),
                       'email'  => $faker->randomElement(['isaac@hotmail.com','luisa@hotmail.com','paco@hotmail.com']),
                       'horario_contacto'  => $faker->randomElement(['vespertino','Matutino','Vespertino']),
                       'comentarios'  => $faker->randomElement(['prueba','hola','eyyy']),
                       'id_escuelas'  => $faker->randomElement(['1','2','3']),
                       'created_at' => date('Y-m-d H:m:s'),
                       'updated_at' => date('Y-m-d H:m:s')
                ));
            }
    }
}
