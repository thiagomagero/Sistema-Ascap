@extends('layouts.app')
@section('content')
<!-- INÍCIO DO CONTEÚDO -->
<section id="main-content" class=" ">
    <section class="wrapper main-wrapper row" style=''>

        <div class='col-xs-12'>

            <div class="page-title">
                <!-- TÍTULO PRINCIPAL DA PÁGINA INÍCIO -->
                  <div class="pull-left">
                    <h1 class="title">Lista de Usuários</h1>
										<!-- BOTÕES INÍCIO -->
                    <a href="#" class="btn btn-primary btnAddUsuario"><i class="fa fa-plus"></i><span> Cadastrar Novo</span></a>
										<!-- BOTÕES FIM -->
                  </div>
                <!-- TÍTULO PRINCIPAL DA PÁGINA FIM -->

                <!-- BREADCRUMB INÍCIO -->
                <div class="pull-right hidden-xs">
                    <ol class="breadcrumb">
                        <li>
                            <a href="/"><i class="fa fa-home"></i>Painel</a>
                        </li>
												<li class="active">
                            <strong>Usuarios</strong>
                        </li>
                    </ol>
                </div>
                <!-- BREADCRUMB FIM -->
            </div>
        </div>
        <div class="clearfix"></div>

        <!-- CORPO DA ÁREA PRINCIPAL INÍCIO -->

        <div class="col-lg-12">
            <section class="box ">
                <header class="panel_header">
                    <h2 class="title pull-left">Adicionar</h2>
                    <div class="actions panel_actions pull-right">
                        <a class="box_toggle fa fa-chevron-down"></a>
                    </div>
                </header>
                <div class="content-body">
                  <table class="table table-striped">
                    <thead>
                      <tr>
                        <td>Id</td>
                        <td>Nome</td>
                        <td>E-mail</td>
                        <td>Ação</td>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($usuarios as $usuario)
                      <tr>
                        <td>{{$usuario->id}}</td>
                        <td>{{$usuario->name}}</td>
                        <td>{{$usuario->email}}</td>
                        <td>
                          <a href="{{ route('usuarios.editar',$usuario->id) }}" class="btn btn-primary btn-sm"><i class="Small material-icons">Editar</i></a>
                          <a href="javascript: deletarUsuario({{ $usuario->id }})" class="btn btn-danger btn-sm"><i class="Small material-icons">Deletar</i></a>

                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
            </section>
			 </div>


        <!-- CORPO DA ÁREA PRINCIPAL FIM -->
    </section>
</section>
<div class="modal fade" tabindex="-1" role="dialog" id="modalAddUsuario">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Adicionar Usuário</h4>
      </div>
      <div class="modal-body">
          @include('usuarios._formAdicionar')
      </div>
      <div class="modal-footer">
        <button class="btn btn-default" data-dismiss="modal">Cancelar</button>
        <button class="btn btn-primary btnSalvaUsuario">Adicionar</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- FIM DO CONTEÚDO -->
@endsection
