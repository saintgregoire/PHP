<?php

class Post
{
    
    public function __construct(private int $id, private string $title, private string $excerpt, private string $content, private int $author, private string $created_at){
        
    }
    
    public function getId() : int {
        return $this->id;
    }
    
    public function setId( int $id ) : void  {
        $this->id = $id;
    }
    
    public function getTitle() : string {
        return $this->title;
    }
    
    public function setTitle( string $title) : void {
        $this->title = $title;
    }
    
    public function getExcerpt() : string {
        return $this->excerpt;
    }
    
    public function setExcerpt( string $excerpt) : void {
        $this->excerpt = $excerpt;
    }
    
    public function getContent() : string {
        return $this->content;
    }
    
    public function setContent( string $content) : void {
        $this->content = $content;
    }
    
    public function getAuthor() : int {
        return $this->author;
    }
    
    public function setAuthor( int $author) : void {
        $this->author = $author;
    }
    
    public function getCreated() : string {
        return $this->created_at;
    }
    
    public function setCreated( string $created_at) : void{
        $this->created_at = $created_at;
    }
    
    
    
    
}


?>