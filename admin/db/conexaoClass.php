<?php 
    class conexaoClass {
        var $conn;

        function openConnect() {
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "lpw_exemplo";

            $this -> conn = new mysqli($servername, $username, $password, $dbname);
        }
            

        function getConnect() {
            return $this -> conn;
        }
    }
?>