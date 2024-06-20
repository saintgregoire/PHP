<?php

class CategoryManager extends AbstractManager{
    
    public function __construct(){
        parent::__construct();
    }
    
    public function findAllCategories() : array {
        $categories = [];
        $query = $this->db->prepare('SELECT * FROM  categories');
        $query->execute();
        $result = $query->fetchAll(PDO::FETCH_ASSOC);
        foreach ($result as $item){
            $category = new Category($item['name']);
            $category->setId($item['id']);
            $categories[] = $category;
            
        }
        return $categories;
    }
    
    public function findCategory(int $id) : Category{
        $query = $this->db->prepare('SELECT * FROM categories WHERE id = :id');
        $parameters = [
            'id' => $id 
            ];
        $query->execute($parameters);
        $result = $query->fetch(PDO::FETCH_ASSOC);
        $category = new Category($result['name']);
        $category->setId($result['id']);
        return $category;
    }
    
    
}



?>