<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

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

  public function setDtNascimentoAttribute($valor){
    $this->attributes['dt_nascimento'] = date('Y-d-m', strtotime($valor));
  }
  public function getDtNascimentoAttribute($valor){

    return $this->attributes['dt_nascimento'] = date('d/m/Y', strtotime($valor));
  }

}
