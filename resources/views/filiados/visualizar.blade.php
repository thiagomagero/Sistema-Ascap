@extends('layouts.app')
@section('content')
  <!-- INÍCIO DO CONTEÚDO -->
  <section id="main-content" class=" ">
    <section class="wrapper main-wrapper row" style=''>

      <div class='col-xs-12'>

        <div class="page-title">
          <!-- TÍTULO PRINCIPAL DA PÁGINA INÍCIO -->
          <div class="pull-left">
            <h1 class="title">{{ isset($filiado->nome) ? $filiado->nome :'' }}</h1>
            <!-- BOTÕES INÍCIO -->
            <a href="/filiados/editar/{{$filiado->id}}" class="btn btn-primary" type="button"><i class="fa fa-pencil"></i><span> Editar </span></a>
            <a href="/filiados/editar/{{$filiado->id}}" class="btn btn-primary" type="button"><i class="fa fa-plus"></i><span> Informar Pagamento </span></a>
            <button data-rota="/filiados/deletar/{{$filiado->id}}" class="btn btn-danger deletar" type="button"><i class="fa fa-minus"></i><span> Deletar </span></button>
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
                <a href="{{ route('filiados') }}">Filiados</a>
              </li>
              <li class="active">
                <strong>{{ isset($filiado->nome) ? $filiado->nome :'' }}</strong>
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
            <h2 class="title pull-left">Dados do filiado</h2>
            <div class="actions panel_actions pull-right">
              <a class="box_toggle fa fa-chevron-down"></a>
            </div>
          </header>
          @include('filiados._dadosVisualizar')

        </section>
      </div>
      <div class="col-lg-12">

        <section class="box ">
          <header class="panel_header">
            <h2 class="title pull-left">Lista de pagamentos</h2>
            <div class="actions panel_actions pull-right">
              <a class="box_toggle fa fa-chevron-down"></a>
            </div>
          </header>


        </section>
      </div>


      <!-- CORPO DA ÁREA PRINCIPAL FIM -->
    </section>
  </section>
  <!-- FIM DO CONTEÚDO -->
@endsection
@push('styles')
  <link href="{{ asset('plugins/select2/select2.css') }}" rel="stylesheet">
  <link href="{{ asset('plugins/icheck/skins/all.css') }}" rel="stylesheet">
  <link href="{{ asset('plugins/datepicker/css/datepicker.css') }}" rel="stylesheet">
@endpush

@push('scripts')
  <script src="{{ asset('plugins/inputmask/min/jquery.inputmask.bundle.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('plugins/select2/select2.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('plugins/icheck/icheck.min.js') }}" type="text/javascript"></script>

  <script src="{{ asset('plugins/datepicker/js/datepicker.js') }}" type="text/javascript"></script>

  @include('filiados._js._jsFiliados')

@endpush
