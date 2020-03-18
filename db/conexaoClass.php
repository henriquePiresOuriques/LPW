<?php 
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "lpw_exemplo";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if($conn->connect_error) {
        die("Conexão falhou: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM clientes";
    $resultado = $conn->query($sql);

    $arrayClientes = array();
    if($resultado-> num_rows > 0) {
        while($linha = $resultado->fetch_assoc()) {
            array_push($arrayClientes, $linha);
        }
    } else {
        echo "0 results";
    }

    foreach ($arrayClientes as $cliente) {
        print($cliente['id_cliente']);
        print($cliente['nome']);
        print($cliente['endereco']);
        print($cliente['email']);
        print($cliente['telefone']);
        print("<br>");
    }

    $conn->close();
?>