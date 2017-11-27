<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\DataTables\DataTables;
use Validator;
use Response;
use App\Filiado as Filiado;
use App\State;
use App\Helpers\Mensagem;
use Carbon\Carbon;
use App\Helpers\LogAtividades;
class FiliadosController extends Controller
{
	public function index()
	{
		// $filiados = Filiado::all();
		// //dd($filiado);
		// return view('filiados.index', compact('filiados'));

		return view('filiados.index');
	}

	public function getFiliados()
	{
		$filiado = Filiado::all();
		return Datatables::of($filiado)
		->addColumn('action', function($filiado){
			return '<div class="btn-group">
			<a href="/filiados/visualizar/'.$filiado->id.'" class="btn btn-info btn-responsive"><i class="glyphicon glyphicon-eye-open"></i></button>
			<a href="/filiados/editar/'.$filiado->id.'" class="btn btn-primary btn-responsive"><i class="glyphicon glyphicon-edit"></i></a>
			<button  data-rota="/filiados/deletar/'.$filiado->id.'" class="btn btn-danger btn-responsive deletar"><i class="glyphicon glyphicon-trash"></i></button>
			</div>';
		})
		->make(true);
	}

	// ->addColumn('action', function($filiado){
	// 	return '<a href="/filiados/visualizar/'.$filiado->id.'" class="btn btn-info btn-xs"><i class="glyphicon glyphicon-eye-open"></i>Show</a>' .
	// 	'<a href="/filiados/editar/'.$filiado->id.'" class="btn btn-primary btn-xs"><i class="glyphicon glyphicon-edit"></i>Editar</a>' .
	// 	'<a href="/filiados/visualizar/'.$filiado->id.'" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-trash"></i>Delete</a>';
	// })

	public function adicionar(){
		$estados = State::all();
		return view('filiados.adicionar')
		->with(compact('estados'));;

	}

	public function salvar(Request $request){
		//sleep(3);
		$validator = Validator::make($request->all(), [
			'cpf' => 'required',
		]);


		if ($validator->fails()) {
			return Response::json(array('erros' => $validator->getMessageBag()->toArray()));
		}else{
			//SE Existir CPF
			if(Filiado::where('cpf', $request->cpf)->first()){
				return response()->json(['retorno'=>1,'mensagem'=>Mensagem::get(1)]);
			}else{

				$filiado = new Filiado();
				$dados = $request->all();

				$filiado->fill($dados);
				$filiado->save();
				\Session::flash('alerta',['tipo'=>'success','titulo'=>'Sucesso.','msg'=>Mensagem::get(2)]);
				return response()->json(['retorno'=>0,'redirect'=>null]);
			}
		}

	}
	public function editar($id)
	{
		$estados = State::all();
		$filiado = Filiado::find($id);
		$filiado['dt_nascimento']=date('d/m/Y', strtotime($filiado['dt_nascimento']));
		// dd($filiado);
		return view('filiados.editar',compact('filiado'))
		->with(compact('estados'));

	}
	public function atualizar(Request $request, $id){

		$filiado = Filiado::find($id);

		$dados = $request->all();

		$filiado->fill($dados);
		$filiado->save();

		\Session::flash('alerta',['tipo'=>'success','titulo'=>'Atualizado!','msg'=>Mensagem::get(4)]);
		return response()->json(['retorno'=>0,'redirect'=>route('filiados')]);
	}

	// public function visualizar($id){
	// 	$dados = Filiado::find($id);
	// 	return response()->json(compact('dados'));
	// }

	public function visualizar($id){
		$filiado = Filiado::find($id);
		switch ($filiado['status']) {
			case 0:
			$status = "Desfiliado";
			break;
			case 1:
			$status = "Filiado";
			break;
		}
		$filiado['status'] = $status;
		return view('filiados.visualizar',compact('filiado'));
	}
	public function deletar($id)
	{
		$filiado = Filiado::find($id);
			$filiado->delete();
		\Session::flash('alerta',['tipo'=>'success','titulo'=>'Removido!','msg'=>'Filiado '.$filiado->nome.' removido com sucesso']);
		LogAtividades::addToLog('Deletou o filiado '.$filiado->nome);
		return response()->json(['retorno'=>0,'redirect'=>route('filiados')]);
	}


	public function listaFiliadosPagamentos($q){
		$results = Filiado::select('id', 'nome','slug_nome','cpf')->where('nome', 'LIKE', '%' . $q . '%')->orWhere('cpf', 'LIKE', '%' . $q . '%')->get();

		return Response::json($results);
	}


}
