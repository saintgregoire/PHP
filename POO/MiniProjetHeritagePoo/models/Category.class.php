<?php

class Category {
    
    private array $post = [];
    
    public function __construct(string $title, string $description){
        $this->title = $title;
        $this->description = $description;
    }
    
    public function getTitle() : string {
        return $this->title;
    }
    
    public function setTitle(string $title) : void{
        $this->title = $title;
    }
    
    public function getDescription() : string {
        return $this->description;
    }
    
    public function setDescription(string $description) : void{
        $this->description = $description;
    }
    
    public function getPost() : array{
        return $this->post;
    }
    
    public function setPost(array $post) : void{
        $this->post = $post;
    }
    
    public function addPost(Post $newPost) : void{
        if(!in_array($newPost, $this->post, true)){
            $this->post[] = $newPost;
        }
    }
    
    public function removePost(Post $postDelete) : void {
        for ($i = 0; $i<count($this->post); $i++){
            if($this->post[$i] === $postDelete){
                unset($this->post[$i]);
                $this->post = array_values($this->post);
                break;
            }
        }
    }
    
}
?>