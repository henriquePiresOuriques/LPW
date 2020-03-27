<?php 
class clientsController {
    function __construct() {
        if (!isset($_SESSION["login"])) {
            header("Location: index.php?c=m&a=l");
        }

        require_once("models/clientsModel.php");
    }

    public function listClients() {
        $clientModel = new clientsModel();
        $clientModel -> listClients();
        $result =$clientModel -> getConsult();

        $arrayClients = array();

        while($line = $result -> fetch_assoc()) {
            array_push($arrayClients, $line);
        }

        require_once("views/header.php");
        require_once("views/clients/listClients.php");
        require_once("views/footer.php");
    }
}
?>