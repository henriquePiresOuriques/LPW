<?php 

require_once('models/clientesModel.php');

class clientesController {
    function formCadastro() {
        require_once('views/templates/header.php');
        require_once('views/clientes/formCadastro.php');
        require_once('views/templates/footer.php');
    }

    function cadastroCliente() {
        $cliente = array(
            "nome" => $_POST['nome'],
            "login" => $_POST['login'],
            "sexo" => $_POST['sexo'],
            "ta" => $_POST['textarea'],
        );

        require_once('views/templates/header.php');
        require_once('views/clientes/cadastroCliente.php');
        require_once('views/templates/footer.php');
        
    }

    public function index() {
        $resultado = $this->model->lista();
        $this->templateData('views/pages/clientes/listaCliente.php', $resultado);
    }
}
?>