<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;
use App\Financeiro as Financeiro;
use App\Helpers\Mensagem;
use App\Helpers\LogAtividades;
use Carbon\Carbon; Carbon::setLocale('pt_BR');;
class FinanceiroController extends Controller
{
    //
    public function index(){
      $financas = Financeiro::all();
      //dd($financeiro);
      return view('financeiro.index',compact('financas'));
    }
    public function salvar(Request $request){
  		//sleep(3);
      // return response()->json($request);
      // exit;
  		$validator = Validator::make($request->all(), [
  			'valor' => 'required',
  		]);


  		if ($validator->fails()) {
  			return Response::json(array('erros' => $validator->getMessageBag()->toArray()));
  		}else{


  				$financeiro = new Financeiro();
  				$dados = $request->all();
  				$financeiro->fill($dados);
  				$financeiro->save();
  				\Session::flash('alerta',['tipo'=>'success','titulo'=>'Sucesso.','msg'=>Mensagem::get(5)]);
  				return response()->json(['retorno'=>0]);

  		}

  	}
}
