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
    public function getValorAttribute($valor){
      // sudo apt-get install php7.0-intl && sudo apt-get install php-intl && sudo service apache2 restart
      $numberFormatter = new \NumberFormatter('pt-BR',\NumberFormatter::CURRENCY);
      return $this->attributes['valor'] = $numberFormatter->format($valor);
    }
    public function setDtPagamentoAttribute($valor){
      $this->attributes['dt_pagamento'] = date("Y-m-d", strtotime(str_replace('/', '-', $valor)) );

    }
    public function getDtPagamentoAttribute($valor){
      return $this->attributes['dt_pagamento'] = date("d/m/Y", strtotime($valor) );

    }

}
