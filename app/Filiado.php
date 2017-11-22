<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Filiado extends Model
{
  protected $table = "filiados";
  protected $fillable = [
    'cpf',
    'nome',
    'matricula',
    'filiacao',
    'dt_nascimento',
    'rg',
    'rg_uf',
    'endereco',
    'cep',
    'cidade',
    'uf',
    'tel_celular',
    'tel_fixo',
    'lotacao',
    'setor',
    'tp_cargo',
    'email',
    'acao_judicial',
    'status',
    'dt_filiacao'
  ];

}
