<?php

class PageController {
    
    public function __construct(){}
    
    public function categories() : void {
        $route = 'categories';
        require "templates/layout.phtml";
    }
    
    
    public function category() : void {
        $category = new CategoryController();
        $category->checkCategory($_GET);
    }
    
    public function post() : void {
        $post = new PostController();
        $post->checkPost($_GET);
    }
    
    public function accueil() : void {
        $route = 'accueil';
        require "templates/layout.phtml";
    }
    
    public function error() : void {
        $route = 'error';
        require "templates/layout.phtml";
    }
    
    public function connect() : void {
        $route = 'connexion';
        require "templates/layout.phtml";
    }
    
    public function inscription() : void {
        $route = 'inscription';
        require "templates/layout.phtml";
    }
    
}








?>