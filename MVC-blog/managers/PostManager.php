<?php

class PostManager extends Abstractmanager {
    public function __construct(){
        parent::__construct();
    }
    
    public function findPost(int $id) : ?Posts {
        $query = $this->db->prepare('SELECT * FROM posts WHERE id = :id');
        $parameters = [
            'id' => $id
            ];
        $query->execute($parameters);
        $post_data = $query->fetch(PDO::FETCH_ASSOC);
        
        
        if($post_data){
            $post = new Posts($post_data['id'], $post_data['title'], $post_data['excerpt'], $post_data['content'], $post_data['author'], $post_data['created_at']);
            
            return $post;
        }
        else{
            return null;
        }
    }
    
    public function showPostName(int $id) : void {
        
        $query = $this->db->prepare('SELECT post_id FROM posts_categories WHERE category_id = :category_id');
    $parameters = [
        'category_id' => $id
        ];
    $query->execute($parameters);
    $posts_ids = $query->fetchAll(PDO::FETCH_COLUMN);
    
    $placeholders = implode(',', array_fill(0, count($posts_ids), '?'));
    $query = $this->db->prepare("SELECT posts.* FROM posts_categories JOIN posts ON posts.id = posts_categories.post_id WHERE posts.id IN ($placeholders)");
    $query->execute($posts_ids);
    $posts = $query->fetchAll(PDO::FETCH_ASSOC);
    
    foreach($posts as $post){
        echo '<li><a href="index.php?route=post&post=' . $post['id'] . '">' . htmlspecialchars($post['title']) . '</a></li>';
    }
        
    }
    
    public function showAuthrName(int $autor_id) : string{
        $query = $this->db->prepare('SELECT * FROM users WHERE id = :id');
        $parameters = [
            'id' => $autor_id
            ];
        $query->execute($parameters);
        $autors = $query->fetch(PDO::FETCH_ASSOC);
        return $autors['username'];
    } 
    
    
    
    
    
    
    
    
}



?>