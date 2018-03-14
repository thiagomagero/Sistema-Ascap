<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\User;
use App\Helpers\LogAtividades;
use App\Helpers\Mensagem;
class UsuarioController extends Controller
{
    //
    public function login(Request $request)
    {
    	$dados = $request->all();
    	//dd($dados);
    	if(Auth::attempt(['email'=>$dados['email'],'password'=>$dados['password']])){
    		\Session::flash('alerta',['tipo'=>'success','titulo'=>'Logado','msg'=>'Logado com sucesso.']);
        LogAtividades::addToLog('Usuário '.$dados['email'].' logou');
    		return response()->json(['retorno'=>0]);
    	}
        return response()->json(['retorno'=>1,'mensagem'=>Mensagem::get(3)]);
    }
    public function sair()
    {
        Auth::logout();
        return redirect()->route('loginIndex');
    }
    public function index(){
        $usuarios = User::all();
        // dd($usuarios);
        return view('usuarios.index',compact('usuarios'));
    }

    public function adicionar(){
        return view('usuarios.adicionar');
    }

    // public function salvar(Request $request){
    //     $dados = $request->all();

    //     $usuario = new User();
    //     $usuario->name = $dados['name'];
    //     $usuario->email = $dados['email'];
    //     $usuario->password = bcrypt($dados['password']);

    //     $usuario->save();
    //     \Session::flash('alerta',['tipo'=>'success','titulo'=>'Salvo!','msg'=>'Usuário salvo com sucesso']);
    //     return redirect()->route('usuarios');
    // }

    public function salvar(Request $request){

        $dados = $request->all();

        $usuario = new User();
        $usuario->name = $dados['name'];
        $usuario->email = $dados['email'];
        $usuario->password = bcrypt($dados['password']);

        //SE USUÁRIO JÁ EXISTE
        if (User::where('email', '=', $usuario->email)->count() > 0) {
            \Session::flash('alerta',['tipo'=>'error','titulo'=>'Erro!','msg'=>'Usuário Já existe']);
        return response()->json(['retorno' => 1]);
        }

        $usuario->save();
        \Session::flash('alerta',['tipo'=>'success','titulo'=>'Salvo!','msg'=>'Usuário salvo com sucesso']);
        LogAtividades::addToLog('Usuário '.$usuario->name.' criado');
        return response()->json(['retorno' => 0]);

        // return redirect()->route('usuarios');
    }

    public function editar($id)
    {

        $usuario = User::find($id);
        return view('usuarios.editar',compact('usuario'));
    }

    public function atualizar(Request $request, $id){

        $usuario = User::find($id);

        $dados = $request->all();
        if(isset($dados['password']) && strlen($dados['password'])>5){
            $dados['password'] = bcrypt($dados['password']);
        }else{
            unset($dados['password']);
        }

        $usuario->update($dados);
        \Session::flash('alerta',['tipo'=>'success','titulo'=>'Atualizado!','msg'=>'Usuario editado com sucesso']);
        return redirect()->route('usuarios');
    }

    public function deletar($id)
    {
        $usuario = User::find($id);
        $usuario->delete();
        \Session::flash('alerta',['tipo'=>'success','titulo'=>'Removido!','msg'=>'Usuario '.$usuario->name.' removido com sucesso']);
        LogAtividades::addToLog('Usuário '.$usuario->name.' deletado');
        return redirect()->route('usuarios');
    }
}
