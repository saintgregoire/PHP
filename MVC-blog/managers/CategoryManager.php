<?php

class CategoryManager extends AbstractManager{
    
    public function __construct(){
        parent::__construct();
    }
    
    public function findCategory(int $id) : Categories {
        
        $query = $this->db->prepare('SELECT * FROM categories WHERE id = :id');
        $parameters = [
            'id' => $id
            ];
        $query->execute($parameters);
        $category_data = $query->fetch(PDO::FETCH_ASSOC);
        $category = new Categories($category_data['id'], $category_data['title'], $category_data['description']);
        return $category;
        
    }
    
    
    
    
    
}




?>