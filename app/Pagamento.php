<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pagamento extends Model
{
    protected $table = "pagamento";
    protected $fillable = [
      'valor',
      'ref_mes',
      'ano_ref',
      'filiado_id',
      'dt_pagamento'
    ];


    public function setValorAttribute($valor){
      $this->attributes['valor'] = str_replace(",", ".", str_replace(".", "", $valor));

    }
    public function setDtPagamentoAttribute($valor){
      $this->attributes['dt_pagamento'] = date("Y-m-d", strtotime(str_replace('/', '-', $valor)) );

    }

}
