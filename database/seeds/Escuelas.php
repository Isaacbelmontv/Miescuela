<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class Escuelas extends Seeder
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
          for ($i=0; $i < 10; $i++) {
        \DB::table('escuelas')->insert(array(
               'nombre'  => $faker->randomElement(['UVM','Tecmilenio','Tecnologico de monterrey']),
               'direccion'  => $faker->randomElement(['CDMX','Tabasco','Monterrey']),
               'telefonos'  => $faker->randomElement(['55555555','66666666','77777777']),
               'correo'  => $faker->randomElement(['isaac@hotmail.com','luisa@hotmail.com','paco@hotmail.com']),
               'sitio_web'  => $faker->randomElement(['hotmail.com','google.com','facebook.com']),
               'descripcion'  => $faker->randomElement(['Uni de paga','Primaria de gobierno','escuela']),
               'horarios'  => $faker->randomElement(['vespertino','Matutino','Vespertino']),
               'modalidad'  => $faker->randomElement(['semestral','semestral','cuatrimestral']),
               'urls_videos'  => $faker->randomElement(['youtube.com','vimeo.com','facebookvideo.com']),
               'logo'  => $faker->randomElement(['imagen.jpg','imagen.jpg','imagen.jpg']),
               'imagen_cabecera'  => $faker->randomElement(['imagen.jpg','imagen.jpg','imagen.jpg']),
               'galeria_imagenes'  => $faker->randomElement(['imagen.jpg','imagen.jpg','imagen.jpg']),
               'id_red_social'  => $faker->randomElement(['1','2','3']),
               'id_escuela_categoria'  => $faker->randomElement(['1','2','3']),
               'created_at' => date('Y-m-d H:m:s'),
               'updated_at' => date('Y-m-d H:m:s')
        ));
    }
    }
}
