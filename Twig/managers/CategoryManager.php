<?php


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

}

?>