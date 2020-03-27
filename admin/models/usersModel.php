<?php
    class usersModel {

        var $result;

        function __construct() {
            require_once("db/conexaoClass.php");
        }

        public function consultaUser($login){
            $Oconn = new conexaoClass();
            $Oconn -> openConnect();
            $sql = "SELECT * FROM usuarios WHERE login='".$login."'";            
            $conn = $Oconn -> getConnect();
            $this -> result = $conn -> query($sql);
        }

        public function getConsult(){
            return $this -> result;
        }
    }
?>