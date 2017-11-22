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
		->editColumn('dt_nascimento', function ($filiado) {
			return date('d/m/Y', strtotime($filiado->dt_nascimento));
		})
		->addColumn('action', function($filiado){
			return '<a href="#" class="btn btn-info btn-xs"><i class="glyphicon glyphicon-eye-open"></i>Show</a>' .
			'<a href="/filiados/editar/'.$filiado->id.'" class="btn btn-primary btn-xs"><i class="glyphicon glyphicon-edit"></i>Editar</a>' .
			'<a onclick="deleteData('.$filiado->id.')" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-trash"></i>Delete</a>';
		})
		->make(true);
	}

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
				$filiado->cpf = $request->cpf;
				$filiado->nome = $request->nome;
				$filiado->matricula = $request->matricula;
				$filiado->filiacao = $request->filiacao;
				$filiado->dt_nascimento = date('Y-m-d H:i', strtotime($request->dt_nascimento));
				$filiado->rg = $request->rg;
				$filiado->rg_uf = $request->rg_uf;
				$filiado->endereco = $request->endereco;
				$filiado->cep = $request->cep;
				$filiado->cidade = $request->cidade;
				$filiado->uf = $request->uf;
				$filiado->tel_celular = $request->tel_celular;
				$filiado->tel_fixo = $request->tel_fixo;
				$filiado->lotacao = $request->lotacao;
				$filiado->setor = $request->setor;
				$filiado->tp_cargo = $request->tp_cargo;
				$filiado->email = $request->email;
				$filiado->acao_judicial = $request->acao_judicial;
				$filiado->status = $request->status;
				$filiado->dt_filiacao = $request->dt_filiacao;
				$filiado->save();
				\Session::flash('alerta',['tipo'=>'success','titulo'=>'Sucesso.','msg'=>Mensagem::get(2)]);
				return response()->json(['retorno'=>0]);
			}
		}

	}
	public function editar($id_filiado)
	{
			$estados = State::all();
			$filiado = Filiado::find($id_filiado);
			//dd($estado);
			return view('filiados.editar',compact('filiado'))
				->with(compact('estados'));

	}


}
