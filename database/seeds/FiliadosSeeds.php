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
				'cpf' => $faker->cpf(false),
				'nome' => $faker->name,
				'matricula' => $faker->numberBetween($min = 234876, $max = 958746),
				'dt_nascimento' => $faker->date,
				'rg' => $faker->rg,
        'rg_uf' => $faker->stateAbbr,
        'cidade' => $faker->city,
        'tel_celular' => $faker->phone,
        'tel_fixo' => $faker->phone,
				'cep' => $faker->randomDigit,
        'email' => $faker->freeEmail,
        'status' => $faker->numberBetween(0,1),
        'acao_judicial' => $faker->numberBetween(0,1),
        'endereco' => $faker->address,
        'uf' => $faker->stateAbbr,
        'lotacao' => $faker->text($maxNbChars = 10),
        'tp_cargo' => 'TPPG',
        'setor' => $faker->text($maxNbChars = 10),
        'slug_nome' => $faker->slug,

			]);
		}
    }
}
