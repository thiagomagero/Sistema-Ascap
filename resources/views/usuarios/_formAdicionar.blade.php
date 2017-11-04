{{-- <div class="input-field">
	<input type="text" name="name" class="form-control" value="{{ isset($usuario->name) ? $usuario->name :'' }}">
	<label>Nome</label>
</div>
<div class="input-field">
	<input type="text" name="email" class="validate" value="{{ isset($usuario->email) ? $usuario->email :'' }}">
	<label>E-mail</label>
</div>
<div class="input-field">
	<input type="password" name="password" class="validate">
	<label>Senha</label>
</div> --}}



<form class="form-horizontal">
	<div class="form-group">
		<label class="col-sm-2 control-label">Nome:</label>
		<div class="col-sm-10">
		<input type="text" class="form-control" id="name" value="">
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-2 control-label">Email:</label>
		<div class="col-sm-10">
		<input type="text" class="form-control" id="email" value="">
		</div>
	</div>
	<div class="form-group">
		<label for="inputPassword" class="col-sm-2 control-label">Senha</label>
		<div class="col-sm-3">
			<input type="password" class="form-control" id="password" maxlength="6" >
		</div>
	</div>
</form>

