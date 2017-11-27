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
    'dt_filiacao',
    'slug_nome'
  ];

  public function setSlugNomeAttribute($valor){
    $this->attributes['slug_nome'] = str_slug($this->attributes['nome']);
  }


  public function setDtNascimentoAttribute($valor){
    $this->attributes['dt_nascimento'] = date('Y-d-m', strtotime($valor));
  }
  public function getDtNascimentoAttribute($valor){

    return $this->attributes['dt_nascimento'] = date('d/m/Y', strtotime($valor));
  }
  public function getStatus(){

    switch ($valor) {
    case 0:
        $status = "Desfiliado";
        break;
    case 1:
        $status = "Filiado";
        break;
      }

    return $this->attributes['status'] = 5;
  }

}
