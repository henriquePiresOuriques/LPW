<?php 
    class clientsModel {

        var $result;

        function __construct() {
            require_once("db/conexaoClass.php");
        }

            public function listClients(){
                $Oconn = new conexaoClass();
                $Oconn -> openConnect();
                $conn = $Oconn -> getConnect();

                $sql = 'SELECT * FROM clientes';            
                $this -> result = $conn -> query($sql);
            }

            public function consultClient($id_cliente) {
                $Oconn = new conexaoClass();
                $Oconn -> openConnect();
                $conn = $Oconn -> getConnect();

                $sql = 'SELECT * FROM clientes WHERE id_cliente="'.$id_cliente.'"';
                $this -> result = $conn -> query($sql);
            }

            public function getConsult(){
                return $this -> result;
            }

            public function insertClient($arrayClient){
                $Oconn = new conexaoClass();
                $Oconn -> openConnect();
                $conn = $Oconn -> getConnect();

                $sql = "INSERT INTO clientes (nome, email, telefone, endereco) 
                VALUES ('".$arrayClient['nome']."' , '".$arrayClient['email']."' , 
                '".$arrayClient['telefone']."' , '".$arrayClient['endereco']."');";
                $this -> result = $conn -> query($sql);
            }

            public function updateClient($arrayClient) {
                $Oconn = new conexaoClass();
                $Oconn -> openConnect();
                $conn = $Oconn -> getConnect();

                $sql = "UPDATE clientes set 
                nome='".$arrayClient['nome']."', 
                email='".$arrayClient['email']."', 
                telefone='".$arrayClient['telefone']."' , 
                endereco='".$arrayClient['endereco']."' 
                WHERE id_cliente=".$arrayClient['id_cliente'].";";

                $this -> result = $conn -> query($sql);
            }

            public function deleteClient($id_cliente) {
                $Oconn = new conexaoClass();
                $Oconn -> openConnect();
                $conn = $Oconn -> getConnect();

                $sql =  "DELETE FROM clientes WHERE id_cliente='".$id_cliente."';";
                $this -> result = $conn -> query($sql);
            }
    }
?>