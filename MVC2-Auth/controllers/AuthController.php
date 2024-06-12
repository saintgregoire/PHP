<?php
class AuthController {
    public function __construct() {}

    public function connexion() : void {
        $route = "connexion";
        require "templates/layout.phtml";
    }

    public function inscription() : void {
        $route = "inscription";
        require "templates/layout.phtml";
    }

    public function userExist() : void {
        if ((isset($_POST['email']) && !empty($_POST['email'])) 
            && (isset($_POST['password']) && !empty($_POST['password']))) {
            
            $connexionData = new UserManager();
            $checkUser = $connexionData->findUser($_POST['email']);
            if ($checkUser !== null) {
                if (password_verify($_POST['password'], $checkUser->getPassword())) {
                    $_SESSION['checkUser'] = $checkUser;
                    header("Location: index.php?route=espace-perso");
                } else {
                    header("Location: index.php?route=err");
                }
            }
        }
    }
    
    public function userInscr() : void {
        
        if(
            isset($_POST['username']) && !empty($_POST['username']) 
            && isset($_POST['email']) && !empty($_POST['email'])
            && isset($_POST['password']) && !empty($_POST['password'])
            && isset($_POST['role']) && !empty($_POST['role'])
            ){
                $newUser = new UserManager();
                $newUser->addUser();
                header('Location: index.php?route=connexion');
            }
        
    }
    
}
?>