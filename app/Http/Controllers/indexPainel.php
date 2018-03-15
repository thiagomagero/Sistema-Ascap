<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Charts;
use App\Financeiro as Financeiro;
use Carbon\Carbon; Carbon::setLocale('pt_BR');;
class indexPainel extends Controller
{
  public function index()
    {
        $chart = Charts::database(Financeiro::all(),'pie', 'google')
        ->title("Contribuiçoes")
        ->elementLabel("Valor")
        ->groupBy('valor');
            return view('painel',compact('chart'));
        }
}
