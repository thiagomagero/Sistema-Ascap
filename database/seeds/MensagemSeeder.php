<?php

use Illuminate\Database\Seeder;
use App\Mensagem;
class MensagemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $allMensagens = [
            ['id' => 1, 'msg' => 'Filiado já cadastrado.'],
            ['id' => 2, 'msg' => 'Filiado cadastrado com sucesso.'],
            ['id' => 3, 'msg' => 'Login ou Senha incorretos.'],
            ['id' => 4, 'msg' => 'Filiado atualizado com sucesso.'],
            ['id' => 5, 'msg' => 'Pagamento informado com sucesso.'],
        ];
      foreach ($allMensagens as $mensagem) {
        Mensagem::create($mensagem);
      }
    }
}
