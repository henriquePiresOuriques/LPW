<?php 

class clientsController {
    function __construct() {
        if (!isset($_SESSION["login"])) {
            header("Location: index.php?c=m&a=l");
        }
        
        require_once('models/clientsModel.php');
    }

    public function insertClientForm() {
        require_once("views/header.php");
        require_once("views/clients/addClients.php");
        require_once("views/footer.php");
    }

    public function listClients() {
        $clientModel = new clientsModel();
        $clientModel -> listClients();
        $result = $clientModel -> getConsult();

        $arrayClients = array();

        while($line = $result -> fetch_assoc()) {
            array_push($arrayClients, $line);
        }

        require_once("views/header.php");
        require_once("views/clients/listClients.php");
        require_once("views/footer.php");
    }
    public function insertClient () {
        $arrayClient = array();

        $arrayClient["nome"]       = $_POST["nome"];
        $arrayClient["email"]      = $_POST["email"];
        $arrayClient["telefone"]   = $_POST["telefone"];
        $arrayClient["endereco"]   = $_POST["endereco"];

        $clientModel =  new clientsModel();
        $clientModel -> insertClient($arrayClient);

        $this -> listClients();
    }

    public function updateClientForm ($id_cliente) {
        $clientModel = new clientsModel();
        $clientModel -> consultClient($id_cliente);
        $result = $clientModel -> getConsult();

        if ($arrayClient = $result -> fetch_assoc()) {
            require_once("views/header.php");
            require_once("views/clients/alteraClients.php");
            require_once("views/footer.php");
        }
    }

    public function updateClient() {
        $arrayClient["id_cliente"] = $_POST["id_cliente"];
        $arrayClient["nome"]       = $_POST["nome"];
        $arrayClient["email"]      = $_POST["email"];
        $arrayClient["telefone"]   = $_POST["telefone"];
        $arrayClient["endereco"]   = $_POST["endereco"];

        $clientModel =  new clientsModel();
        $clientModel -> updateClient($arrayClient);
        $this -> listClients();
    }

    public function deleteClient($id_cliente) {
        $clientModel = new clientsModel();
        $clientModel -> deleteClient($id_cliente);
        $this -> listClients();
    }
        
}
?>