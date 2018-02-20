@extends('layouts.app')
@section('content')
  <!-- INÍCIO DO CONTEÚDO -->
  <section id="main-content" class=" ">
    <section class="wrapper main-wrapper row" style=''>

      <div class='col-xs-12'>

        <div class="page-title">
          <!-- TÍTULO PRINCIPAL DA PÁGINA INÍCIO -->
          <div class="pull-left">
            <h1 class="title">Dashboard</h1>
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
                <a href="{{ route('filiados') }}">Filiados</a>
              </li>
              <li class="active">
                <strong></strong>
              </li>
            </ol>
          </div>
          <!-- BREADCRUMB FIM -->
        </div>
      </div>
      <div class="clearfix"></div>

      <!-- CORPO DA ÁREA PRINCIPAL INÍCIO -->

      <div class="col-xs-12 col-md-6">
          <section class="box ">
              <header class="panel_header">
                  <h2 class="title pull-left">Platforms Used</h2>
                  <div class="actions panel_actions pull-right">
                      <a class="box_toggle fa fa-chevron-down"></a>
                      <a class="box_setting fa fa-cog" data-toggle="modal" href="#section-settings"></a>
                      <a class="box_close fa fa-times"></a>
                  </div>
              </header>
              <div class="content-body">    <div class="row">
                      <div class="col-xs-12">
{!! $chart->html() !!}


                      </div>
                  </div> <!-- End .row -->
              </div>
          </section></div>



      <!-- CORPO DA ÁREA PRINCIPAL FIM -->
    </section>
  </section>
  <!-- FIM DO CONTEÚDO -->

@endsection
@push('styles')

  <link href="{{ asset('plugins/jquery-ui/smoothness/jquery-ui.min.css') }}" rel="stylesheet">
  <link href="{{ asset('plugins/jvectormap/jquery-jvectormap-2.0.1.css') }}" rel="stylesheet">
  <link href="{{ asset('plugins/icheck/skins/minimal/white.css') }}" rel="stylesheet">

@endpush

@push('scripts')
  {!! $chart->script() !!}
  <script src="{{ asset('plugins/echarts/echarts-all.js') }}" type="text/javascript"></script>
  <script src="{{ asset('js/chart-echarts.js') }}" type="text/javascript"></script>

@endpush
