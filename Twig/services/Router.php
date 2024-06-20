<?php

class Router {
    
   public function __construct(){
       
   } 
   
   
   public function handleRequest(array $get) : void{
       if (!isset($get["route"])){
            $blogController = new BlogController();
            $blogController->home();
       }
   }
    
    
    
}


?>