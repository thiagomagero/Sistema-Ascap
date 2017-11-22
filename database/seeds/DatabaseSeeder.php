<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsuariosSeeds::class); // habilitando o uso da seed usuario
        $this->call(FiliadosSeeds::class);
        $this->call(MensagemSeeder::class);
        $this->call(StateTableSeeder::class);
        // $this->call(CityTableSeeder::class);
    }
}
