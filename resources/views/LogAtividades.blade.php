@extends('layouts.app')
@section('content')
<!-- INÍCIO DO CONTEÚDO -->
<section id="main-content" class=" ">
	<section class="wrapper main-wrapper row" style=''>

		<div class='col-xs-12'>

			<div class="page-title">
				<!-- TÍTULO PRINCIPAL DA PÁGINA INÍCIO -->
				<div class="pull-left">
					<h1 class="title">Log de Atividades</h1>
					<!-- BOTÕES INÍCIO -->

					<!-- BOTÕES FIM -->
				</div>
				<!-- TÍTULO PRINCIPAL DA PÁGINA FIM -->

				<!-- BREADCRUMB INÍCIO -->
				<div class="pull-right hidden-xs">
					<ol class="breadcrumb">
						<li>
							<a href="/"><i class="fa fa-home"></i>Painel</a>
						</li>
						<li>
							Administração
						</li>
						<li>
							<strong>Log de Atividades</strong>
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
					<h2 class="title pull-left"></h2>
					<div class="actions panel_actions pull-right">
						<a class="box_toggle fa fa-chevron-down"></a>
					</div>
				</header>
				<div class="content-body">
					<table class="table table-bordered">
						<tr>
							<th>No</th>
							<th>Subject</th>
							<th>URL</th>
							<th>Method</th>
							<th>Ip</th>
							<th width="300px">User Agent</th>
							<th>User Id</th>
						</tr>
						@if($logs->count())
						@foreach($logs as $key => $log)
						<tr>
							<td>{{ ++$key }}</td>
							<td>{{ $log->subject }}</td>
							<td>{{ $log->url }}</td>
							<td><label class="label label-info">{{ $log->method }}</label></td>
							<td>{{ $log->ip }}</td>
							<td class="text-danger">{{ $log->agent }}</td>
							<td>{{ $log->user_id }}</td>
						</tr>
						@endforeach
						@endif
					</table>
				</div>
			</section>
		</div>


		<!-- CORPO DA ÁREA PRINCIPAL FIM -->
	</section>
</section>
<!-- FIM DO CONTEÚDO -->
@endsection
