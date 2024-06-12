<?php

class Router {
    
    public function __construct(){}
    
    public function handleRequest(array $get) : void{
        if(isset($get['route']) && $get['route'] === "about"){
            $about = new PageController();
            $about->about();
        }
        else if(!isset($get['route'])){
            $home = new PageController();
            $home->home();
        }
        else{
            $err = new PageController();
            $err->Err();
        }
    }
    
    
    
}




?>