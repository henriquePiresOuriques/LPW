<?php
	session_start();
	//require_once("config/config.php");

	if(!isset($_GET['c'])) {
		require_once('Controllers/mainController.php');
		$Main = new mainController();
		$Main -> index();
	} else {
		switch($_REQUEST['c']) {
			case 'm':
				require_once("Controllers/mainController.php");
                $Main = new mainController();
                
                if (!isset($_GET['a'])) {
                    $Main -> index();
                } else {
                    switch ($_REQUEST['a']) {
                      case 'i' : $Main -> index(); break;
                      case 'l' : $Main -> login(); break;
                      case 'sd' : $Main -> sessionDestroy(); break;
                    }
				}
			break;

			case 'u':
				require_once("Controllers/usersController.php");
				$User = new usersController();

				if (!isset($_GET['a'])) {
					$User -> index();
				} else {
					switch($_REQUEST['a']) {
						case 'vl': $User -> validateLogin();
						break;
					}
				}
			break;

			case 'c':
				require_once("Controllers/clientsController.php");
				$Client = new clientsController();

				if (!isset($_GET['a'])) {
					$Client -> index();
				} else {
					switch($_REQUEST['a']) {
						case 'lc': $Client -> listClients();
						break;
					}
				}
			break;
		}	
	}

?>