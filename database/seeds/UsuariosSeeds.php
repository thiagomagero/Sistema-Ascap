<?php

use Illuminate\Database\Seeder;
use App\User;
class UsuariosSeeds extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $usuario = new User();
        $usuario->name = "Thiago Mágero";
        $usuario->email = "thiagocmagero@gmail.com";
        $usuario->password = bcrypt("123456");
        $usuario->save();
    }
}
