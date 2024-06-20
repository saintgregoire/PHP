<?php
/**
 * @author : Gaellan
 * @link : https://github.com/Gaellan
 */


class PostManager extends AbstractManager
{
    public function __construct(){
        parent::__construct();
    }
    
    public function findLatest() : array {
        $posts = [];
        $query = $this->db->prepare('SELECT * FROM posts ORDER BY created_at DESC LIMIT 4');
        $query->execute();
        $result = $query->fetchAll(PDO::FETCH_ASSOC);
        
        foreach($result as $item){
            $userManager = new UserManager();
            $author = $userManager->findById($item['author']);
            $post = new Post($item['id'], $item['title'], $item['excerpt'], $item['content'], $author, $item['created_at']);
            $posts[] = $post;
        }
        
        return $posts;
    }
    
    public function findOne(int $id) : Post {
        $query = $this->db->prepare('SELECT * FROM posts WHERE id = :id');
        $parameters = [
            'id' => $id
            ];
        $query->execute($parameters);
        $result = $query->fetch(PDO::FETCH_ASSOC);
        if($result){
            $userManager = new UserManager();
            $author = $userManager->findById($result['author']);
            $post = new Post($result['id'], $result['title'], $result['excerpt'], $result['content'], $author, $result['created_at']);
            return $post;
        }
        else{
            return null;
        }
    }

    
    public function findByCategory(int $categoryId) : array {
        
        $posts = [];
        $query = $this->db->prepare('SELECT posts.* FROM posts_categories JOIN posts ON posts_categories.post_id = posts.id WHERE posts_categories.category_id = :id ');
        $parameters = [
            'id' => $categoryId
            ];
        $query->execute($parameters);
        $result = $query->fetchAll(PDO::FETCH_ASSOC);
        
        foreach($result as $item){
            $userManager = new UserManager();
            $author = $userManager->findById($item['author']);
            $post = new Post($item['id'], $item['title'], $item['excerpt'], $item['content'], $author, $item['created_at']);
            $posts[] = $post;
        }
        
        return $posts;
    }

    
    public function findPostCategory(int $post_id) : string{
        $query = $this->db->prepare('SELECT categories.title FROM posts_categories JOIN categories ON posts_categories.category_id = categories.id WHERE posts_categories.post_id = :post_id ');
        $parameters = [
            'post_id' => $post_id
            ];
        $query->execute($parameters);
        $result = $query->fetch(PDO::FETCH_ASSOC);
        
        return $result['title'];
    }
    

}