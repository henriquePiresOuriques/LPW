<?php 

class clientsController {
    function __construct() {
        if (!isset($_SESSION["login"])) {
            header("Location: index.php?c=m&a=l");
        }
        
        require_once('models/clientsModel.php');
        $this -> clientsModel = new clientsModel();
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

        $this -> clientsModel -> insertClient($arrayClient);
        $id_cliente = $this -> clientsModel -> getConsult();

        if ($_FILES["photo"]["tmp_name"] != "") {
        $foto_temp = $_FILES["photo"]["tmp_name"];
        $foto_name = $_FILES["photo"]["name"];
        $extensao = str_replace('.', '', strrchr($foto_name, '.'));

        $max_width = 600;
        $max_height = 600;

        $img = null;

            if ($extensao == 'jpg' || $extensao == 'jpeg') {
                $img = imagecreatefromjpeg($foto_temp);
            } else if ($extensao == 'png') {
                $img = imagecreatefrompng($foto_temp);
            } else if ($extensao == 'gif') {
                $img = imagecreatefromgif($foto_temp);
            } else {
                $img = imagecreatefromjpeg($foto_temp);
            }

            if ($img) {
                $width = imagesx($img);
                $height = imagesy($img);
                $scale = min($max_width, $max_height/$height);

                if ($scale < 1) {
                    $new_width = floor($scale*$width);
                    $new_height = floor($scale*$height);

                    $tmp_img = imagecreatetruecolor($new_width, $new_height);

                    imagecopyresampled($tmp_img, $img, 0, 0, 0, 0,
                                    $new_width, $new_height, $width, $height);
                    imagedestroy($img);
                    $img = $tmp_img;
                }
            }

            imagejpeg($img, "assets/img/clients/{$id_cliente}.jpg");
        }

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

        $clientModel -> updateClient($arrayClient);

        if ($_FILES["photo"]["tmp_name"] != "") {
            $id_cliente = $arrayClient["id_cliente"];
            $foto_temp = $_FILES["photo"]["tmp_name"];
            $foto_name = $_FILES["photo"]["name"];
            $extensao = str_replace('.', '', strrchr($foto_name, '.'));
    
            $max_width = 600;
            $max_height = 600;
    
            $img = null;
    
                if ($extensao == 'jpg' || $extensao == 'jpeg') {
                    $img = imagecreatefromjpeg($foto_temp);
                } else if ($extensao == 'png') {
                    $img = imagecreatefrompng($foto_temp);
                } else if ($extensao == 'gif') {
                    $img = imagecreatefromgif($foto_temp);
                } else {
                    $img = imagecreatefromjpeg($foto_temp);
                }
    
                if ($img) {
                    $width = imagesx($img);
                    $height = imagesy($img);
                    $scale = min($max_width, $max_height/$height);
    
                    if ($scale < 1) {
                        $new_width = floor($scale*$width);
                        $new_height = floor($scale*$height);
    
                        $tmp_img = imagecreatetruecolor($new_width, $new_height);
    
                        imagecopyresampled($tmp_img, $img, 0, 0, 0, 0,
                                        $new_width, $new_height, $width, $height);
                        imagedestroy($img);
                        $img = $tmp_img;
                    }
                }
    
                imagejpeg($img, "assets/img/clients/{$id_cliente}.jpg");
            }

        $this -> listClients();
    }

    public function deleteClient($id_cliente) {
        $clientModel = new clientsModel();
        $clientModel -> deleteClient($id_cliente);

        $linkPhoto = "assets/img/clients/{$id_cliente}.jpg";
        if (file_exists($linkPhoto)) {
            unlink($linkPhoto);
        }

        $dir = ("assets/files;clients/{$id_cliente}");
        $this -> delTree($dir);
        $this -> listClients();
    }

    public function listFilesClient($id_cliente) {
        require_once("views/header.php");
        require_once("views/clients/files/listFilesClient.php");
        require_once("views/footer.php");
    }

    public function uploadFilesClient($id_cliente) {
        require_once("views/header.php");
        require_once("views/clients/files/uploadFilesClient.php");
        require_once("views/footer.php");
    }

    public function uploadFilesClientAction($id_cliente) {
        $name = $_FILES['file']['name'];
        $tempName = $_FILES['file']['tmp_name'];
        $type = $_FILES['file']['type'];

        $file = $tempName;
        $location = "assets/files/clients/{$id_cliente}/{$name}";
        move_uploaded_file($file, $location);

        $this -> listFilesClient($id_cliente);
    }

    public function deleteFilesClient($id_cliente) {
        $file = $_GET['file'];

        unlink("assets/files/clients/{$id_cliente}/{$file}");

        $this -> listFilesClient($id_cliente);
    }

    function delTree($dir) {
        $files = array_diff(scandir($dir), array('.', '..'));
        foreach ($files as $file) {
            (is_dir("{$dir}/{$file}")) ? $this -> delTree("{$dir}/{$file}") : unlink("{$dir}/ {$file}");
        }
        return rmdir($dir);
    }
        
}
?>