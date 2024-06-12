<?php

class Router {
    public function __construct(){}
    
    public function handleRequest(array $get) : void{
        if(!isset($get['route']) ||($get['route'] === "connexion" && isset($get['route'])) ){
            $connexion = new AuthController();
            $connexion->connexion();
        }
        if(isset($get['route']) && $get['route'] === "inscription"){
            $inscription = new AuthController();
            $inscription->inscription();
        }
        if(isset($get['route']) && $get['route'] === "check-connexion"){
            $check = new AuthController();
            $check->userExist();
        }
        if(isset($get['route']) && $get['route'] === "espace-perso"){
            $pageCheck = new PageController();
            $pageCheck->userPage();
        }
        if(isset($get['route']) && $get['route'] === "err"){
            $pageCheck = new PageController();
            $pageCheck->errPage();
        }
        if(isset($get['route']) && $get['route'] === "check-inscription"){
            $insCheck = new AuthController();
            $insCheck->userInscr();
        }
        
    }
    
    
}



?>