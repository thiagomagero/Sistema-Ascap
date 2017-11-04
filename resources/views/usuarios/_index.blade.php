@extends('layouts.app')

@section('content')
<div class="container">
  <div class="section">
    <div class="col-lg-12">
      <h1 class="page-header">Lista de Usuários</h1>
    </div>
    <div class="row">
    {{-- <a href="{{ route('usuarios.adicionar') }}" class="btn btn-success btnAddUsuario"><i class="fa fa-plus-circle"></i> Adicionar Usuário</a>
    </div> --}}
    <button class="btn btn-success btnAddUsuario"><i class="fa fa-plus-circle"></i> Adicionar Usuário</button>
    </div>
    <div class="row">
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
  </div>

</div>
</div>
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


@endsection