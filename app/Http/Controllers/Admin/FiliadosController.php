<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\DataTables\DataTables;
use Validator;
use Response;
use App\Filiado;
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
		->addColumn('action', function($filiado){
			return '<a href="#" class="btn btn-info btn-xs"><i class="glyphicon glyphicon-eye-open"></i>Show</a>' .
			'<a onclick="editForm('.$filiado->id.')" class="btn btn-primary btn-xs"><i class="glyphicon glyphicon-edit"></i>Edit</a>' .
			'<a onclick="deleteData('.$filiado->id.')" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-trash"></i>Delete</a>';
		})->make(true);
	}

	public function adicionar(){
		return view('filiados.adicionar');

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
						$filiado->save();
					\Session::flash('alerta',['tipo'=>'success','titulo'=>'Sucesso.','msg'=>Mensagem::get(2)]);
					return response()->json(['retorno'=>0]);
				}
			}



		// $dados = $request->all();
		// $filiado = new Filiado();
		// $filiado->cpf = $dados['cpf'];
		// $filiado->save();
		//  \Session::flash('alerta',['tipo'=>'success','titulo'=>'Sucesso!','msg'=>'Dados cadastrados.']);
		//  return response()->json(['retorno' => 0]);
		//  //return redirect()->route('filiados.adicionar');
	}
}
