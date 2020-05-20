<?php 
    class clientsModel {

        var $result;

        function __construct() {
            require_once("db/conexaoClass.php");
             $Oconn = new conexaoClass();
             $Oconn -> openConnect();
             $conn = $Oconn -> getConnect();
             $this -> conn = $Oconn -> getConnect();
        }

            public function listClients(){

                $sql = 'SELECT * FROM clientes';            
                $this -> result = $this -> conn -> query($sql);
            }

            public function consultClient($id_cliente) {
                $sql = 'SELECT * FROM clientes WHERE id_cliente="'.$id_cliente.'"';
                $this -> result = $this -> conn -> query($sql);
            }

            public function getConsult(){
                return $this -> result;
            }

            public function insertClient($arrayClient){
                $sql = "INSERT INTO clientes (nome, email, telefone, endereco) 
                VALUES ('".$arrayClient['nome']."' , '".$arrayClient['email']."' , 
                '".$arrayClient['telefone']."' , '".$arrayClient['endereco']."');";
                $this -> conn -> query($sql);
                $this -> result = $this -> conn -> insert_id;
            }

            public function updateClient($arrayClient) {
                $sql = "UPDATE clientes set 
                nome='".$arrayClient['nome']."', 
                email='".$arrayClient['email']."', 
                telefone='".$arrayClient['telefone']."' , 
                endereco='".$arrayClient['endereco']."' 
                WHERE id_cliente=".$arrayClient['id_cliente'].";";

                $this -> result = $this -> conn -> query($sql);
            }

            public function deleteClient($id_cliente) {
                $sql =  "DELETE FROM clientes WHERE id_cliente='".$id_cliente."';";
                $this -> result = $this -> conn -> query($sql);
            }
    }
?>