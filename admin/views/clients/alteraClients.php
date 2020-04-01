<h2>Alterar Cliente</h2>

<form method="POST" action="?c=c&a=uc">
	
	<div class="form-group">
		<div>
			<label form="id_cliente">ID:</label>
			<input type="text" class="form-control" name="id_cliente" value="<?= $arrayClient['id_cliente'] ?>" readonly="readonly">
		</div>
		<div>
			<label form="nome">Nome:</label>
			<input type="text" class="form-control" name="nome" value="<?= $arrayClient['nome'] ?>">
		</div>
		<div>
			<label form="email">Email:</label>
			<input type="mail" class="form-control" name="email" value="<?= $arrayClient['email'] ?>">
		</div>
		<div>
			<label form="telefone">Telefone:</label>
			<input type="text" class="form-control" name="telefone" value="<?= $arrayClient['telefone'] ?>">
		</div>
		<div>
			<label form="endereco">Endereço:</label>
			<input type="text" class="form-control" name="endereco" value="<?= $arrayClient['endereco'] ?>">
		</div>

		<br>
		<button type="submit" class="btn btn-default">Salvar</button>

	</div>
</form>