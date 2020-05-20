<h1>Insere novo arquivo cliente</h1>
<form class="form-group" method="POST" action="?c=c&a=ufca&id=<?=$id_cliente?>" enctype="multipart/form-data">

        <label for="name">Arquivo:</label>
        <input type="file" class="form-control-file" name="file">
    <br>
    <button type="submit" class="btn btn-success">Salvar</button>
</form>