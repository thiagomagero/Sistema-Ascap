<div class="content-body">
  <div class="row ui-grids">
    <div class="row">
      <div class="col-sm-4">
        Filiação: <strong>{{ isset($filiado->filiacao) ? $filiado->filiacao :'' }}</strong>
      </div>
      <div class="col-sm-4">
        Data de Nascimento: <strong>{{ isset($filiado->dt_nascimento) ? $filiado->dt_nascimento :'' }}</strong>
      </div>
      <div class="col-sm-4">
        Matrícula: <strong>{{ isset($filiado->matricula) ? $filiado->matricula :'' }}</strong>
      </div>
    </div>
    <hr>
    <div class="row">
      <div class="col-sm-4">
        RG: <strong>{{ isset($filiado->rg) ? $filiado->rg :'' }}</strong>
      </div>
      <div class="col-sm-4">
        CPF: <strong>{{ isset($filiado->cpf) ? $filiado->cpf :'' }}</strong>
      </div>
      {{-- <div class="col-sm-4">
        Endereço: <strong>{{ isset($filiado->endereco) ? $filiado->endereco :'' }}</strong>
      </div> --}}
    </div>

    <hr>
    <div class="row">
      <div class="col-sm-8">
        Endereço: <strong>{{ isset($filiado->endereco) ? $filiado->endereco :'' }}</strong>
      </div>
      <div class="col-sm-4">
        CEP: <strong>{{ isset($filiado->cep) ? $filiado->cep :'' }}</strong>
      </div>
    </div>
    <hr>
    <div class="row">
      <div class="col-sm-4">
        Cidade: <strong>{{ isset($filiado->cidade) ? $filiado->cidade :'' }}</strong>
      </div>
      <div class="col-sm-4">
        Estado: <strong>{{ isset($filiado->uf) ? $filiado->uf :'' }}</strong>
      </div>
      <div class="col-sm-4">
        Telefone Fixo: <strong>{{ isset($filiado->tel_fixo) ? $filiado->tel_fixo :'' }}</strong>
      </div>
    </div>
    <hr>
    <div class="row">

      <div class="col-sm-4">
        Celular: <strong>{{ isset($filiado->tel_celular) ? $filiado->tel_celular :'' }}</strong>
      </div>
      <div class="col-sm-4">
        Lotação: <strong>{{ isset($filiado->lotacao) ? $filiado->lotacao :'' }}</strong>
      </div>
      <div class="col-sm-4">
        Cargo: <strong>{{ isset($filiado->tp_cargo) ? $filiado->tp_cargo :'' }}</strong>
      </div>
    </div>
    <hr>
    <div class="row">

      <div class="col-sm-4">
        Email: <strong>{{ isset($filiado->email) ? $filiado->email :'' }}</strong>
      </div>
      <div class="col-sm-4">
        Status: <strong>{{ isset($filiado->status) ? $filiado->status :'' }}</strong>
      </div>
      <div class="col-sm-4">
        Setor: <strong>{{ isset($filiado->setor) ? $filiado->setor :'' }}</strong>
      </div>
    </div>

  </div>

  </div>
