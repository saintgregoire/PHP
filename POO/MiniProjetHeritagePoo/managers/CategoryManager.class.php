<?php
require "./models/Category.class.php";

class CategoryManager extends AbstractManager{
    
    public function __construct(){
        parent::__construct();
    }
    
    public function findAll() : array {
        $query = $this->db->prepare('SELECT * FROM categories');
        $query->execute();
        $categories = $query->fetchAll(PDO::FETCH_ASSOC);
        $categories_list = [];
        foreach($categories as $category){
            $category = new Category($category['title'], $category['description']);
            $categories_list[] = $category;
        }
        return $categories_list;
    }
    
    public function findOne(int $id) : ? Category {
        $query = $this->db->prepare('SELECT * FROM categories WHERE id = :id');
        $parameters = [
            'id' => $id
        ];
        $query->execute($parameters);
        $categories_data = $query->fetch(PDO::FETCH_ASSOC);
        $one_category = new Category($categories_data['title'], $categories_data['description']);
        return $one_category;
    }
    
    public function create(Category $new_category) : void{
        $query = $this->db->prepare('INSERT INTO categories(title, description) VALUES(:title, :description)' );
        $parameters =[
            'title' => $new_category->getTitle(),
            'description' => $new_category->getDescription()
            ];
        $query->execute($parameters);
    }
    
    public function update(Category $up_category) : void{
        $query = $this->db->prepare('UPDATE categories SET title = :title,
            description = :description WHERE title = :title');
        $parameters = [
            'title' => $up_category->getTitle(),
            'description' => $up_category->getDescription()
        ];
        $query->execute($parameters);
    }
    
    public function delete(int $id) : void {
        $query = $this->db->prepare('DELETE FROM categories WHERE id = :id');
        $query = $this->db->prepare('DELETE FROM posts_categories WHERE categories_id = :id');
        $parameters = [
            'id' => $id
        ];
        $query->execute($parameters);
    }
    
}

?>