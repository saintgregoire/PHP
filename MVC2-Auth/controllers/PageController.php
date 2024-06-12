<?php

class PageController {
   public function __construct() {}
   
   public function userPage() : void{
       $route = "espace-perso";
       require "templates/layout.phtml"; 
   }
   
   public function errPage() : void {
       $route = "err";
       require "templates/layout.phtml";
   }
    
    
    
    
}

?>