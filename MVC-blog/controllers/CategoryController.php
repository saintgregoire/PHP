<?php

class CategoryController {
    
    public function __construct(){}
    
    public function checkCategory(array $get) : void {
        $route = 'category';
        $category = new CategoryManager();
        $category_data = $category->findCategory($get['category']);
        $title = $category_data->getTitle();
        $description = $category_data->getDescription();
        $id = $category_data->getId();
        require 'templates/layout.phtml';
    }
    
    
}



?>