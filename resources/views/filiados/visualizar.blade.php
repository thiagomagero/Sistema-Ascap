@extends('layouts.app')
@section('content')
<!-- INÍCIO DO CONTEÚDO -->
<section id="main-content" class=" ">
  <section class="wrapper main-wrapper row" style=''>

    <div class='col-xs-12'>

      <div class="page-title">
        <!-- TÍTULO PRINCIPAL DA PÁGINA INÍCIO -->
        <div class="pull-left">
          <h1 class="title">Visualizar Filiado</h1>
          <!-- BOTÕES INÍCIO -->
          <!-- <button class="btn btn-primary" type="button"><i class="fa fa-plus"></i><span> Cadastrar Novo</span></button> -->
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
          <h2 class="title pull-left">{{ isset($filiado->nome) ? $filiado->nome :'' }}</h2>
          <div class="actions panel_actions pull-right">
            <a class="box_toggle fa fa-chevron-down"></a>
          </div>
        </header>
        <div class="content-body">
          <div class="row ui-grids">
          <div class="row">
            <div class="col-sm-4">
              Filiação: <strong>{{ isset($filiado->nome) ? $filiado->filiacao :'' }}</strong>
            </div>
            <div class="col-sm-4">
              Filiação: <strong>{{ isset($filiado->nome) ? $filiado->dt_nascimento :'' }}</strong>
            </div>
            <div class="col-sm-4">
              Filiação: <strong>{{ isset($filiado->nome) ? $filiado->filiacao :'' }}</strong>
            </div>
          </div>

          </div>

          </div>

            Filiação:
            Data de Nascimento:
            Matrícula:
            RG:
            CPF:
            Endereço:
            Estado:
            Cidade:
            CEP:
            Telefone Fixo:
            Celular:
            Lotação:
            Setor:
            Email:
            Status:
            Cargo:
            Ação Judicial
        </div>
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

<script type="text/javascript">
var regras = {
  cpf: {
    required: true,
    cpf: true
  },
  email: {
    required: true,
    email: true
  }
};

ajaxFire("formAddFiliado",regras);

</script>

@endpush
@section('scripts')
@include("dinamicos.js._jsfiliados")
@endsection
