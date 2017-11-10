<div class='row'>
	<div class="col-xs-12">
		<label class="form-label" for="">Nome:</label>
			<input type="text" class="form-control" name="nome">
	</div>

</div>
<div class="row">
	<div class="col-xs-12">
		<label class="form-label" for="">Filiação:</label>
			<input type="text" class="form-control " name="filiacao">
	</div>

</div>
<div class="row">
	<div class="col-xs-3">
		<label class="form-label" for="">Data de Nascimento:</label>
			<input type="text" class="form-control "  data-mask="date" name="dt_nascimento">
	</div>
	<div class="col-xs-3">
		<label class="form-label" for="">Matrícula:</label>
			<input type="text" class="form-control " name="matricula">
	</div>
	<div class="col-xs-3">
		<label class="form-label" for="">RG:</label>
			<input type="text" class="form-control " name="rg">

	</div>
	<div class="col-xs-3">
		<label class="form-label" for="">CPF:</label>
			<input type="text" class="form-control " data-mask="99999999999" name="cpf" id="cpf">
	</div>
</div>
<div class="row">
	<div class="col-xs-8">
		<label class="form-label" for="">Endereço:</label>
			<input type="text" class="form-control ">
	</div>
	<div class="col-xs-4">
		<div class="form-group">
				<label class="form-label">Estado:</label>

				<select class=" " id="s2example-1">
						<option>Selecione um Estado</option>
						<option value="AC">Acre</option>
						<option value="AL">Alagoas</option>
						<option value="AP">Amapá</option>
						<option value="AM">Amazonas</option>
						<option value="BA">Bahia</option>
						<option value="CE">Ceará</option>
						<option value="DF">Distrito Federal</option>
						<option value="ES">Espírito Santo</option>
						<option value="GO">Goiás</option>
						<option value="MA">Maranhão</option>
						<option value="MT">Mato Grosso</option>
						<option value="MS">Mato Grosso do Sul</option>
						<option value="MG">Minas Gerais</option>
						<option value="PA">Pará</option>
						<option value="PB">Paraíba</option>
						<option value="PR">Paraná</option>
						<option value="PE">Pernambuco</option>
						<option value="PI">Piauí</option>
						<option value="RJ">Rio de Janeiro</option>
						<option value="RN">Rio Grande do Norte</option>
						<option value="RS">Rio Grande do Sul</option>
						<option value="RO">Rondônia</option>
						<option value="RR">Roraima</option>
						<option value="SC">Santa Catarina</option>
						<option value="SP">São Paulo</option>
						<option value="SE">Sergipe</option>
						<option value="TO">Tocantins</option>
				</select>


		</div>
	</div>
</div>
<div class="row">
	<div class="col-xs-4">
		<label class="form-label" for="">Cidade:</label>
			<input type="text" class="form-control ">
	</div>
	<div class="col-xs-4">
		<label class="form-label" for="">CEP:</label>
			<input type="text" class="form-control " name="cep">
	</div>
	<div class="col-xs-4">
		<label class="form-label" for="">Telefone Fixo:</label>
			<input type="text" class="form-control ">
	</div>
</div>
<div class="row">
	<div class="col-xs-4">
		<label class="form-label" for="">Celular:</label>
			<input type="text" class="form-control ">
	</div>
	<div class="col-xs-4">
		<label class="form-label" for="">Lotação:</label>
			<input type="text" class="form-control ">
	</div>
	<div class="col-xs-4">
		<label class="form-label" for="">Setor:</label>
			<input type="text" class="form-control ">
	</div>
</div>
<div class="row">
	<div class="col-xs-8">
		<label class="form-label" for="">Email:</label>
			<input type="text" class="form-control " name="email">
	</div>
	<div class="col-xs-4" style="margin-top:32px">
		<label class="form-label" for="">Cargo:</label>
		<label class="icheck-label form-label" for="TPPG">TPPG</label>
		<input tabindex="5" type="checkbox" id="TPPG" class="icheck-minimal-purple" >
		<label class="icheck-label form-label" for="APPGG">APPGG</label>
		<input tabindex="5" type="checkbox" id="APPGG" class="icheck-minimal-purple" >
		<label class="icheck-label form-label" for="GPPGG">GPPGG</label>
		<input tabindex="5" type="checkbox" id="GPPGG" class="icheck-minimal-purple" >

	</div>
</div>
<div class="row">
	<div class="col-xs-4" style="margin-top:32px">
		<label class="form-label" for="">Status:</label>
		<label class="icheck-label form-label" for="filiado">Filiado</label>
		<input tabindex="5" type="checkbox" id="filiado" class="icheck-minimal-purple" >
		<label class="icheck-label form-label" for="desfiliado">Desfiliado</label>
		<input tabindex="5" type="checkbox" id="desfiliado" class="icheck-minimal-purple" >
	</div>
	<div class="col-xs-4" style="margin-top:32px">
		<label class="icheck-label form-label" for="filiado">Ação Judicial: </label>
		<input tabindex="5" type="checkbox" id="filiado" class="icheck-minimal-purple" >
	</div>
</div>



<!-- <div class="input-field">
	<input type="text" name="name" class="validate" value="<?php echo e(isset($usuario->name) ? $usuario->name :''); ?>">
	<label>Nome</label>
</div>
<div class="input-field">
	<input type="text" name="email" class="validate" value="<?php echo e(isset($usuario->email) ? $usuario->email :''); ?>">
	<label>E-mail</label>
</div>
<div class="input-field">
	<input type="password" name="password" class="validate">
	<label>Senha</label>
</div> -->
