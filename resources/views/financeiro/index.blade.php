@extends('layouts.app')
@section('content')
  <!-- INÍCIO DO CONTEÚDO -->
  <section id="main-content" class=" ">
    <section class="wrapper main-wrapper row" style=''>

      <div class='col-xs-12'>

        <div class="page-title">
          <!-- TÍTULO PRINCIPAL DA PÁGINA INÍCIO -->
          <div class="pull-left">
            <h1 class="title">Contribuições</h1>
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
                <strong>Contribuições</strong>
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
            <div class="row">

            </div>
          </header>
          <div class="content-body">
            <div class="row">
              <div class="pull-left">
<a href="#modalAddPagamento" data-toggle="modal" class="btn btn-primary col-md-offset-4">Adicionar Pagamento</a>

              </div>

              @if (isset($financas))
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
                          <th>Descrição</th>
                          {{-- <th>Ação</th> --}}
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($financas as $financa)
                          <tr>
                            <th scope="row">{{$financa->id}}</th>
                            <td>{{$financa->valor}}</td>
                            <td>{{$financa->dt_pagamento}}</td>
                            <td>{{$financa->ref_mes}}/{{$financa->ano_ref}}</td>
                            <td>{{$financa->descricao}}</td>
                            {{-- <td>
                          <a href="http://localhost:8000/usuarios/editar/1" class="btn btn-primary btn-sm"><i class="Small material-icons">Editar</i></a>
                          <a href="javascript: deletarUsuario(1)" class="btn btn-danger btn-sm"><i class="Small material-icons">Deletar</i></a>

                        </td> --}}
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

      @include('financeiro._modalAddPagamento')

  @endsection
  @push('styles')


  @endpush
  @push('scripts')

  @endpush
