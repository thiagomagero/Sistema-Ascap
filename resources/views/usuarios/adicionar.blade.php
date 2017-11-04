@extends('layouts.app')
@section('content')
<nav>
	<div class="nav-wrapper green">
		<div class="col s12 container">
			<a href="{{ route('painel') }}" class="breadcrumb">Início</a>
			<a href="{{ route('usuarios') }}" class="breadcrumb">Usuários</a>
			<a class="breadcrumb">Adicionar usuário</a>

		</div>
	</div>
</nav>
<div class="container">
	<div class="section">
		<div class="row">
			<h4 align="center">Adicionar usuário</h4>
		</div>
	</div>

	<div class="row">
		<form action="{{ route('usuarios.salvar') }}" method="post">
			{{ csrf_field() }}
			@include('usuarios._formAdicionar')
			<button class="btn blue"> Adicionar </button>
		</form>
	</div>

</div>

@endsection