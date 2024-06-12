<?php
require './models/Post.class.php';

class PostManager extends AbstractManager {
    
    public function __construct(){
        parent::__construct();
    }
    
    public function findAll() : array {
        $query = $this->db->prepare('SELECT * FROM posts');
        $query->execute();
        $posts = $query->fetchAll(PDO::FETCH_ASSOC);
        $posts_list = [];
        foreach($posts as $post){
            $post = new Post($post['title'], $post['excerpt'], $post['content'], $post['author'], $post['created_at']);
            $posts_list[] = $post;
        }
        return $posts_list;
    }
    
    public function findOne(int $id) : ? Post {
        $query = $this->db->prepare('SELECT * FROM posts WHERE id = :id');
        $parameters = [
            'id' => $id
        ];
        $query->execute($parameters);
        $post_data = $query->fetch(PDO::FETCH_ASSOC);
        $one_post = new Post($post_data['title'], $post_data['excerpt'], $post_data['content'], $post_data['author'], $post_data['created_at']);
        return $one_post;
    }
    
    public function create(Post $new_post) : void{
        $query = $this->db->prepare('INSERT INTO posts(title, excerpt, content, author, created_at) VALUES(:title, :excerpt, :content, :author, :created_at)' );
        $parameters =[
            'title' => $new_post->getTitle(),
            'excerpt' => $new_post->getExcerpt(),
            'content' => $new_post->getContent(),
            'author' => $new_post->getAutor(),
            'created_at' => $new_post->getDate()
            ];
        $query->execute($parameters);
    }
    
    public function update(Post $up_post) : void{
        $query = $this->db->prepare('UPDATE posts SET title = :title,
            excerpt = :excerpt,
            content = :content,
            author = :author,
            created_at = :created_at WHERE title = :title');
        $parameters = [
            'title' => $up_post->getTitle(),
            'excerpt' => $up_post->getExcerpt(),
            'content' => $up_post->getContent(),
            'author' => $up_post->getAutor(),
            'created_at' => $up_post->getDate() 
        ];
        $query->execute($parameters);
    }
    
    public function delete(int $id) : void {
        $query = $this->db->prepare('DELETE FROM posts WHERE id = :id');
        $query = $this->db->prepare('DELETE FROM posts_categories WHERE post_id = :id');
        $parameters = [
            'id' => $id
        ];
        $query->execute($parameters);
    }
}


?>