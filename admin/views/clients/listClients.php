<h1>Lista de Clientes</h1>
<table class='table'>
    <tr>
        <th>Código</th>
        <th>Nome</th>
        <th>Email</th>
        <th>Endereço</th>
        <th>Telefone</th>
    </tr>

    <?php 
        foreach ($arrayClients as $cliente) {
    ?>

    <tr>
        <td><?=$cliente["id_cliente"]?></td>
        <td><?=$cliente["nome"] ?></td>
        <td><?=$cliente["email"] ?></td>
        <td><?=$cliente["telefone"] ?></td>
        <td><?=$cliente["endereco"] ?></td>
    </tr>
    <?php 
        }
    ?>
</table>