<?php

class Router{
    
    public function __construct(){}
    
    public function handleRequest(array $get) : void{
        if(isset($get['route']) && $get['route'] === "categories"){
            $categories = new PageController();
            $categories->categories();
        }
        else if((isset($get['route']) && $get['route'] === "category") && (isset($get['category']) && !empty($get['category'])) )
        {
            $category = new PageController();
            $category->category();
        }
        else if((isset($get['route']) && $get['route'] === "post") && (isset($get['post']) && !empty($get['post'])) ){
            $post = new PageController();
            $post->post();
        }
        else if(!isset($get['route'])){
            $accueil = new PageController();
            $accueil->accueil();
        }
        else if(isset($get['route']) && $get['route'] === 'connexion'){
            $connect = new PageController();
            $connect->connect();
        }
        
        else if(isset($get['route']) && $get['route'] === 'inscription'){
            $inscr = new PageController();
            $inscr->inscription();
        }
        
        else if(isset($get['route']) && ($get['route'] !== 'post' || $get['route'] !== 'categories'  || $get['route'] !== 'category' || $get['route'] !== 'connexion' || $get['route'] !== 'inscription' )){
            $error = new PageController();
            $error->error();
        }
    }
    
}


?>