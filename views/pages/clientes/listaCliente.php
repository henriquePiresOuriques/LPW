<h2 class="center">Clientes</h2>
<table>
    <thead>
        <tr>
            <th>Nome</th>
            <th>Endereço</th>
            <th>Email</th>
            <th>Telefone</th>
        </tr>
    </thead>

    <tbody>
        <?php foreach ($arrayClientes as $cliente): ?>
            <tr>
                <td><?= $clietne["name"] ?></td>
                <td><?= $clietne["endereco"] ?></td>
                <td><?= $clietne["email"] ?></td>
                <td><?= $clietne["telefone"] ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
