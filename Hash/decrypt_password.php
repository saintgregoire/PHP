<?php

if(
    (isset($_POST['pass']) && !empty($_POST['pass'])) &&
    (isset($_POST['hash']) && !empty($_POST['hash']))
    ){
        $pass = $_POST['pass'];
        $hash = $_POST['hash'];
        $isPasswordCorrect = password_verify($pass, $hash);
        
        if($isPasswordCorrect){
            echo "le mot de passe est le bon";
        }
        else{
            echo "erreur de mot de passe";
        }
    }

?>