<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;
use App\Helpers\Mensagem;
use App\Helpers\LogAtividades;
use App\Pagamento as Pagamento;
use App\Filiado as Filiado;
use Carbon\Carbon; Carbon::setLocale('pt_BR');;
class PagamentosController extends Controller
{
  public function index(){
    return view('pagamentos.index');
  }
  public function porFiliado($filiado_id){
    $filiado = Filiado::find($filiado_id);
    $pagamentos = Pagamento::where('filiado_id', $filiado_id)->get();
    //dd($pagamentos);
  		return view('pagamentos.index',compact('pagamentos'))
  		->with(compact('filiado'));
  }
  public function salvar(Request $request){
		//sleep(3);
		$validator = Validator::make($request->all(), [
			'valor' => 'required',
		]);


		if ($validator->fails()) {
			return Response::json(array('erros' => $validator->getMessageBag()->toArray()));
		}else{


				$pagamento = new Pagamento();
				$dados = $request->all();
				$pagamento->fill($dados);
				$pagamento->save();
				\Session::flash('alerta',['tipo'=>'success','titulo'=>'Sucesso.','msg'=>Mensagem::get(2)]);
				return response()->json(['retorno'=>0,'redirect'=>route('pagamentos')]);

		}

	}
}
