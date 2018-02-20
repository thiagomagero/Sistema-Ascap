<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// MIDDLEWARE AUTH PROTEGE AS ROTAS ENQUANTO O USUARIO NÃO ESTIVER LOGADO
Route::group(['middleware'=>'auth'], function(){
	Route::get('/painel',['as'=>'painel', 'uses'=>'indexPainel@index']);

	//Rota para logout
	Route::get('/sair',['as'=>'sair', 'uses'=>'Admin\UsuarioController@sair']);
	//Index usuários
	Route::get('/usuarios',['as'=>'usuarios', 'uses'=>'Admin\UsuarioController@index']);
	// add usuarios
	Route::get('/usuarios/adicionar',['as'=>'usuarios.adicionar', 'uses'=>'Admin\UsuarioController@adicionar']);
	// salvar usuario
	Route::post('/usuarios/salvar',['as'=>'usuarios.salvar', 'uses'=>'Admin\UsuarioController@salvar']);
	// editar usuario
	Route::get('/usuarios/editar/{id}',['as'=>'usuarios.editar', 'uses'=>'Admin\UsuarioController@editar']);
	// salvar edição usuario
	Route::put('/usuarios/atualizar/{id}',['as'=>'usuarios.atualizar', 'uses'=>'Admin\UsuarioController@atualizar']);
	// deletar usuario
	Route::get('/usuarios/deletar/{id}',['as'=>'usuarios.deletar', 'uses'=>'Admin\UsuarioController@deletar']);

	// View Filiados
	Route::get('/filiados',['as'=>'filiados', 'uses'=>'Admin\FiliadosController@index']);

	// Retorno dados para datatable FILIADOS

	//Route::get('/filiados/getFiliados', ['as'=>'getFiliados','uses'=>'Admin\FiliadosController@getFiliados']);
	//OUTRA FORMA DE MANIPULAR AS ROTAS ABAIXO
	 Route::get('/filiados/getFiliados','Admin\FiliadosController@getFiliados')->name('getFiliados');
	// View adicionar filiados

	Route::get('/filiados/adicionar',['as'=>'filiados.adicionar', 'uses'=>'Admin\FiliadosController@adicionar']);
	Route::post('/filiados/salvar',['as'=>'filiados.salvar', 'uses'=>'Admin\FiliadosController@salvar']);

	Route::get('/filiados/editar/{id}',['as'=>'filiados.editar', 'uses'=>'Admin\FiliadosController@editar']);

	Route::post('/filiados/atualizar/{id}',['as'=>'filiados.atualizar', 'uses'=>'Admin\FiliadosController@atualizar']);
	Route::get('/filiados/visualizar/{id}',['as'=>'filiados.visualizar', 'uses'=>'Admin\FiliadosController@visualizar']);
	Route::get('/filiados/deletar/{id}',['as'=>'filiados.deletar', 'uses'=>'Admin\FiliadosController@deletar']);


	// PAGAMENTOS
	Route::get('/pagamentos',['as'=>'pagamentos', 'uses'=>'Admin\PagamentosController@index']);

	Route::get('/pagamentos/listaFiliados/{q}',['as'=>'pagamentos.listafiliados', 'uses'=>'Admin\FiliadosController@listaFiliadosPagamentos']);
	Route::get('/pagamentos/{filiado_id}/{nome?}',['as'=>'pagamentos.filiado', 'uses'=>'Admin\PagamentosController@porFiliado']);

	Route::post('/pagamento/salvar',['as'=>'pagamento.salvar', 'uses'=>'Admin\PagamentosController@salvar']);

	//FINANCEIRO
	Route::get('/financeiro',['as'=>'financeiro', 'uses'=>'Admin\FinanceiroController@index']);
	Route::post('/financeiro/salvar',['as'=>'financeiro.salvar', 'uses'=>'Admin\FinanceiroController@salvar']);

});
// FIM MIDDLEWARE AUTH
Route::get('/login',['as'=>'login', function(){
	return view('login.index');
}]);



Route::post('/login',['as'=>'login', 'uses'=>'Admin\UsuarioController@login']);
Route::get('/LogAtividades',['as'=>'log_atividades', 'uses'=>'HomeController@LogAtividades']);
