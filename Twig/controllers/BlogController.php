<?php

class BlogController extends AbstractController{
    
    public function  __construct(){
        parent::__construct();
    }
    
    public function home() : void{
        $postManager = new PostManager();
        $allPosts = $postManager->findAll();
        
        $categoryManager = new CategoryManager();
        $allCategories = $CategoryManager->findAll();
        
        $this->render('home.html.twig', ['posts' => $allPosts,
            'categories' => $allCategories] );
    }
}


?>