<?php

class PageController{
    public function __construct(){}
    
    public function home() : void{
        $route = "home";
        require "./templates/layout.phtml";
    }
    
    public function about() : void{
        $route = "about";
        require "./templates/layout.phtml";
    }
    
    public function Err() : void{
        $route = "404";
        require "./templates/layout.phtml";
    }
    
}



?>