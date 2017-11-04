<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class FiliadosSeeds extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('pt_BR');
			foreach (range(1,50) as $index) {
				DB::table('filiados')->insert([
				'cpf' => $faker->unique()->numberBetween($min = 12564857159, $max = 98745632519),
				'nome' => $faker->name,
				'matricula' => $faker->numberBetween($min = 234876, $max = 958746),
				'dt_nascimento' => $faker->date,
				'rg' => $faker->randomDigit,
				'cep' => $faker->randomDigit,
        'endereco' => $faker->address,
        'uf' => $faker->stateAbbr,
			]);
		}
    }
}
