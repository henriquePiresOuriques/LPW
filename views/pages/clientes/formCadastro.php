<h2>Cadastro do Cliente</h2>
<form method="POST" action="?c=c&a=cca">

<div class="form-group">
    <label>Nome</label>
    <input required type="text" class="form-control"
    size="12" maxlength="12" name="nome">
</div>

<div class="form-group">
    <label>Login</label>
    <input type="text" class="form-control" size="12"
    maxlength="36" name="login">
</div>

<label for="email">Exemplo Seleção Radio</label>

<div class="radio">
    <label class="radio-inline"><input checked type="radio"
    value="Masculino" name="sexo">Masculino</label>
    <label class="radio-inline"><input checked type="radio"
    value="Feminino" name="sexo">Feminino</label>
</div>

<label for="check">Exemplo Seleção checkbox</label> <br>

<div class="form-check form-check-inline">
    <label class="form-check-label">
        <input type="checkbox" class="form-check-input"
        value="c_op1" name="check[]">Opção 1
    </label>
</div>

<div class="form-check form-check-inline">
    <label class="form-check-label">
        <input type="checkbox" class="form-check-input"
        value="c_op2" name="check[]">Opção 2
    </label>
</div>

<div class="form-check form-check-inline">
    <label class="form-check-label">
        <input type="checkbox" class="form-check-input"
        value="c_op3" name="check[]">Opção 3
    </label>
</div>

<div class="form-group">
    <label for="comment">Exemplo textarea</label>
    <textarea name="textarea" class="form-control" row="5"
    id="comment"></textarea>
</div>

<div class="form-group">
    <label for="sel1">Exemplo Select Simples</label>
    <select class="form-control" name="select_simpels">
        <option value="op1">Opção1</option>
        <option value="op2">Opção2</option>
        <option value="op3">Opção3</option>
    </select>
</div>

<div class="form-group">
    <label for="sel1">Exemplo Select estendido</label>
    <select multiple class="form-control" 
    name="select_simpels" size="2">
        <option value="op1">Opção1</option>
        <option value="op2">Opção2</option>
        <option value="op3">Opção3</option>
    </select>
</div>

<input type="submit" class="btn btn-primary" value="Envia">

</form>
<br>