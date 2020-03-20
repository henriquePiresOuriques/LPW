<h2>Clientes</h2>
<table class="table">
        <tr>
            <th>Código</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Telefone</th>
            <th>Endereço</th>
        </tr>

        <?php 
            foreach ($arrayClientes as $cliente) {
        ?>
            <tr>
                <td><?=$cliente["id_cliente"] ?></td>
                <td><?=$cliente["nome"] ?></td>
                <td><?=$cliente["email"] ?></td>
                <td><?=$cliente["telefone"] ?></td>
                <td><?=$cliente["endereco"] ?></td>
            </tr>
        <?php 
            } 
        ?>   
</table>
