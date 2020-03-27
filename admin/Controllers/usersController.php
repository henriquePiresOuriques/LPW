<?php 
class usersController {

    public function validateLogin() {
        $login = $_POST["login"];
        require("models/usersModel.php");
        $User = new usersModel();
        $User -> consultaUser($login);
        $result = $User -> getConsult();

        if ($line= $result -> fetch_assoc()) {
            if ($line['pass'] == $_POST["pass"]) {
                $_SESSION['idUser'] = $line['idUser'];
                $_SESSION['name'] = $line['name'];
                $_SESSION['login'] = $line['login'];
                header("Location: index.php?c=m&a=i");
            } else {
                print("senha errada");
            }
        } else {
            print("usuário não existe");
        }
    }
}
?>