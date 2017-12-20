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
@push('scripts')
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

  ajaxFire("formAddPagamento",regras);
  </script>
  @endpush
