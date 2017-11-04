@extends('layouts.app')



@section('content')
<nav>
	<div class="nav-wrapper green">
		<div class="col s12 container">
			<a href="{{ route('painel') }}" class="breadcrumb">Início</a>
			<a href="{{ route('usuarios') }}" class="breadcrumb">Usuários</a>
			<a class="breadcrumb">Editar usuário {{ isset($usuario->name) ? $usuario->name :'' }}</a>

		</div>
	</div>
</nav>
<div class="container">
	<div class="section">
		<div class="row">
			<h4 align="center">Editar usuário</h4>
		</div>
	</div>

	<div class="row">
		<form action="{{ route('usuarios.atualizar',$usuario->id) }}" method="post">
			{{ csrf_field() }}
			<input type="hidden" name="_method" value="put">

			@include('usuarios._formAdicionar')

			<button class="btn blue"> Atualizar </button>

		</form>
	</div>

</div>


@endsection