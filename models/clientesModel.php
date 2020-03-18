<?php 
    require_once()

    class clientesModel{
        public function lista() {
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
                }
    }
?>