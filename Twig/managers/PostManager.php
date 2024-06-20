<?php


class PostManager extends AbstractManager
{
    public function __construct(){
        parent::__construct();
    }
    
    public function findAll() : array {
        $posts = [];
        $query = $this->db->prepare('SELECT * FROM posts');
        $query->execute();
        $result = $query->fetchAll(PDO::FETCH_ASSOC);
        
        foreach($result as $item){
            $post = new Post($item['id'], $item['title'], $item['excerpt'], $item['content'], $item['author'], $item['created_at']);
            $posts[] = $post;
        }
        
        return $posts;
    }
    

    

}