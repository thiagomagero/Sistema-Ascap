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
                            <td>Otto</td>
                            <td>Otto</td>
                            <td>@mdo</td>
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

    <!-- modal start -->
    <div class="modal fade col-xs-12" id="modalAddPagamento"  tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title">Registrar pagamento</h4>
          </div>
          <form id="formAddPagamento" action="{{ route('pagamento.salvar') }}" method="POST"  novalidate>
            {{ csrf_field() }}
            @if (isset($filiado))
                <input type="hidden" name="filiado_id" value="{{$filiado->id}}">
            @endif
          <div class="modal-body">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="field-1" class="control-label">Valor do pagamento</label>
                  <input type="text" class="form-control moedaReal" name="valor" required>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4">
                <div class="form-group">
                  <label for="field-4" class="control-label">Data do pagamento</label>
                  <input type="text" class="form-control datepicker" data-format="dd/mm/yyyy" data-mask="date" name="dt_pagamento" value="" readonly required>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="field-5" class="control-label">Mês referência</label>
                  <input class="form-control datepicker" data-min-view-mode="months" data-start-view="1" name="ref_mes" data-format="M" type="text" readonly required>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="field-5" class="control-label">Ano referência</label>
                  <input class="form-control datepicker" data-min-view-mode="years" data-start-view="1" name="ano_ref" data-format="yyyy" type="text" readonly required>
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <input type="submit" class="btn btn-primary" value="Salvar">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
          </div>
        </form>
        </div>
      </div>
    </div>
    <!-- modal end -->

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
      $(this).typeahead('setQuery', '');
    });

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

    ajaxFire("formAddPagamento",regras);
    </script>


  @endpush
