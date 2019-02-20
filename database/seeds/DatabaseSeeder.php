<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call('RedesSociales');
        $this->call('CategoriaEscuela');
        $this->call('Escuelas');
        $this->call('Leads');
        $this->call('Users');
    }
}
