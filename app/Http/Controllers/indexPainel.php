<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Charts;
class indexPainel extends Controller
{
  public function index()
    {
        $chart = Charts::create('area', 'highcharts')
    ->title('Relatorio de pagamentos')
    ->elementLabel('Grafico anual')
    ->labels(['Janeiro', 'Fevereiro', 'Marco','Junho','Julho','Agosto','Setembro','Outubro','Novembro','Dezembro'])
    ->values([5,8,10,20,30,40,50,60,70,80,90,100])
    ->dimensions(700,500)
    ->responsive(true);

        return view('painel', ['chart' => $chart]);
    }
}
