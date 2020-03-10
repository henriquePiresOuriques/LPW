<?php
	
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
		}
	}

?>