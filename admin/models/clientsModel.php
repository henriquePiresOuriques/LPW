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
    
            public function getConsult(){
                return $this -> result;
            }
    }
?>