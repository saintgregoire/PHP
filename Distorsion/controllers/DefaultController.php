<?php

class DefaultController {
    
    public function __constract(){}
    
    public function home() : void{
        $template = "./templates/home.phtml";
        require "./templates/layout.phtml"; 
    }
    
    public function notFound() : void{
       $template = "./templates/404.phtml";
        require "./templates/layout.phtml"; 
    }
}



?>