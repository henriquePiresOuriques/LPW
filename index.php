<?php
	session_start();
	
	if(!isset($_GET['c'])) {
		require_once('Controllers/siteController.php');
		$site = new siteController();
		$site -> index();
	} else {
		switch($_REQUEST['c']) {
 
			case 's':
				require_once('Controllers/siteController.php');
				$site = new siteController();
				switch($_REQUEST['a']){
					case 'p':
						$site -> produtos();
					break;
	
					case 'c':
						$site -> contato();
					break;
	
					case 's':
						$site -> sobre();
					break;

					case 'h':
						$site -> index();
					break;
				}
			break;
					case 'c':
						require_once("controllers/clienteController.php");
						$cliente = new clientesController();

						if(!isset($_GET['a'])) {
							//$cliente -> index();
						} else {
							switch($_REQUEST['a']) {
								case 'cc': $cliente -> formCadastro();
								break;
								case 'cca': $cliente -> cadastroCliente();
								break;
								case 'lc': $cliente -> listaClientes();
								break;
							}
						}
				
			break;
		}
	}

?>