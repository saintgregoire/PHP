<?php

class CategoryController {
    
    private CategoryManager $cm;
    
    public function __construct(){
        $this->cm = new CategoryManager();
    }
    
    public function addCategory() : void{
        
    }
    
    public function getCategories() : void{
        $categories = 
        $this->cm->findAllCategories();
        $template = './templates/get_categories.phtml';
        require './templates/layout.phtml';
    }
    
    public function getCategory() : void {
        if(isset($_GET['id']) && !empty($_GET['id'])){
            $id = $_GET['id'];
            $category = $this->cm->findCategory($id);
            $template = './templates/get-category.phtml';
            require './templates/layout.phtml';
        }
    }
}



?>