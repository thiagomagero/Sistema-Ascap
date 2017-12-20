@extends('layouts.app')
@section('content')
  <!-- INÍCIO DO CONTEÚDO -->
  <section id="main-content" class=" ">
    <section class="wrapper main-wrapper row" style=''>

      <div class='col-xs-12'>

        <div class="page-title">
          <!-- TÍTULO PRINCIPAL DA PÁGINA INÍCIO -->
          <div class="pull-left">
            <h1 class="title">Pagamentos</h1>
            {{-- <a href="{{ route('filiados.adicionar') }}" class="btn btn-primary"><i class="fa fa-plus"></i><span> Cadastrar Novo</span></a> --}}
          </div>
          <!-- TÍTULO PRINCIPAL DA PÁGINA FIM -->

          <!-- BREADCRUMB INÍCIO -->
          <div class="pull-right hidden-xs">
            <ol class="breadcrumb">
              <li>
                <a href="index-2.html"><i class="fa fa-home"></i>Painel</a>
              </li>
              <li class="active">
                <strong>Pagamentos</strong>
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
            <h2 class="title pull-left">{{ isset($filiado->nome) ? $filiado->nome :'Informação de pagamento' }}</h2>
            <div class="actions panel_actions pull-right">
              <a class="box_toggle fa fa-chevron-down"></a>
            </div>
          </header>
          <div class="content-body">
            <div class="row">
              <div class="col-md-4 col-md-offset-4">
                <div class="form-group">
                  <label class="form-label">Selecione um filiado</label>
                  <div class="input-group">
                    <span class="input-group-addon">
                      <i class="fa fa-search"></i>
                    </span>
                    <input type="text" class="form-control" placeholder="Busque por nome ou CPF" id="buscaPagamento">

                  </div>
                </div>
                @if (isset($pagamentos))
                  <a href="#modalAddPagamento" data-toggle="modal" class="btn btn-primary col-md-offset-4">Adicionar Pagamento</a>
                @endif
              </div>

              @if (isset($pagamentos))
                <div class="row">

                  <div class="col-md-12">
                    <hr>
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>Cod.</th>
                          <th>Valor do Pagamento</th>
                          <th>Data do Pagamento</th>
                          <th>Mês/Ano Referência</th>
                          <th>Ação</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($pagamentos as $pagamento)
                          <tr>
                            <th scope="row">{{$pagamento->id}}</th>
                            <td>{{$pagamento->valor}}</td>
                            <td>{{$pagamento->dt_pagamento}}</td>
                            <td>{{$pagamento->ref_mes}}/{{$pagamento->ano_ref}}</td>
                            <td></td>
                          </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              @endif
            </div>
          </div>
        </section></div>

        <!-- CORPO DA ÁREA PRINCIPAL FIM -->
      </section>
    </section>
    <!-- FIM DO CONTEÚDO -->

      @include('pagamentos._modalAddPagamento')

  @endsection
  @push('styles')
    <link href="{{ asset('plugins/typeahead/css/typeahead.css') }}" rel="stylesheet">

  @endpush
  @push('scripts')
    <script src="{{ asset('plugins/typeahead/typeahead.bundle.js') }}" type="text/javascript"></script>
    <script src="{{ asset('plugins/typeahead/handlebars.min.js') }}" type="text/javascript"></script>

    <script type="text/javascript">
    var rota = "/pagamentos/listaFiliados/";
    var buscar_autocomplete = new Bloodhound({
      datumTokenizer: Bloodhound.tokenizers.obj.whitespace('value'),
      queryTokenizer: Bloodhound.tokenizers.whitespace,
      // You can also prefetch suggestions
      // prefetch: 'data/typeahead-generate.php',
      remote: rota+'%QUERY'
    });

    buscar_autocomplete.initialize();

    $('#buscaPagamento').typeahead({
      hint: true,
      highlight: true
    }, {
      name: 'string-randomizer',
      displayKey: 'nome',
      source: buscar_autocomplete.ttAdapter(),
      templates: {
        empty: 'No matching movies found',
        suggestion: Handlebars.compile("@{{nome}} - @{{cpf}}")
      }
    }).on('typeahead:selected', function(event, selection) {

      window.location = "/pagamentos/"+selection.id+"/"+selection.slug_nome;
      // the second argument has the info you want
      // var rota = "/pagamentos/"+selection.id;
      // ajaxFireDados(rota, function(data){
      //     // if(data.retorno==0){
      //     //   window.location = data.redirect;
      //     // }
      // });

      // clearing the selection requires a typeahead method
      $(this).typeahead('val', '');
    });


    </script>


  @endpush
