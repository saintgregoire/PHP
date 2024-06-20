<?php

class Router {
   private DefaultController $dc;
   private CategoryController $cc;
    
    public function __construct(){
        $this->dc = new DefaultController();
        $this->cc = new CategoryController();
    }
    
    public function handleRequest( ? string $route ) : void{
        
        if($route !== null && $route === "home"){
            $this->dc->home();
        }
        else if($route !== null && $route === "add-category"){
            echo "add-category";
        }
        else if($route !== null && $route === "get-category"){
            $this->cc->getCategory();
        }
        else if($route !== null && $route === "add-categories"){
            $this->cc->getCategories();
        }
        else if($route !== null && $route === "add-room"){
            echo "add-room";
        }
        else if($route !== null && $route === "get-rooms"){
            echo "get-rooms";
        }
        else if($route !== null && $route === "add-message"){
            echo "add-message";
        }
        else if($route !== null && $route === "show-room"){
            echo "show-room";
        }
        else if($route !== null && $route === "404"){
            $this->dc->notFound();
        }
        else{
            $this->dc->home();
        }
    }
    
}


?>