<h2>Cadastro do Cliente</h2>

<form method="POST" action="?c=c&a=ic" enctype="multipart/form-data">
	
	<div class="form-group">
		<div>
			<label form="nome">Nome:</label>
			<input type="text" class="form-control" name="nome">
		</div>
		<div>
			<label form="email">Email:</label>
			<input type="mail" class="form-control" name="email">
		</div>
		<div>
			<label form="telefone">Telefone:</label>
			<input type="text" class="form-control" name="telefone">
		</div>
		<div>
			<label form="endereco">Endereço:</label>
			<input type="text" class="form-control" name="endereco">
		</div>
		<br>
		<div class="form-group">
			<label form="img">Foto:</label>
			<input type="file" class="form-control col-md-4" name="photo" size="40">
		</div>
		<br>
		<button type="submit" class="btn btn-default">Salvar</button>
	</div>
</form>