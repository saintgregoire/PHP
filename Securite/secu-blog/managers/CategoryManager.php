<?php
/**
 * @author : Gaellan
 * @link : https://github.com/Gaellan
 */


class CategoryManager extends AbstractManager
{
    public function __construct(){
        parent::__construct();
    }
    
    
    public function findAll() : array {
        $categories = [];
        $query = $this->db->prepare('SELECT * FROM  categories');
        $query->execute();
        $result = $query->fetchAll(PDO::FETCH_ASSOC);
        foreach ($result as $item){
            $category = new Category($item['id'], $item['title'], $item['description']);
            $categories[] = $category;
            
        }
        return $categories;
    }
    
    public function findOne(int $id) : ? Category{
        $query = $this->db->prepare('SELECT * FROM categories WHERE id = :id');
        $parameters = [
            'id' => $id 
            ];
        $query->execute($parameters);
        $result = $query->fetch(PDO::FETCH_ASSOC);
        if($result){
            $category = new Category($result['id'], $result['title'], $result['description']);
            return $category;
        }
        else{
            return null;
        }
        
        
    }

}