<?php

class PostController {
    
    public function __construct(){}
    
    public function checkPost(array $get) : void {
        $route = 'post';
        
        $post = new PostManager();
        $post_data = $post->findPost($get['post']);
        
        $title = $post_data->getTitle();
        $excerpt = $post_data->getExcerpt();
        $content = $post_data->getContent();
        $created_at = $post_data->getCreated();
        $author = $post->showAuthrName($post_data->getAuthor());
        
        require './templates/layout.phtml';
    }
    
    
}


?>