<?php

class Post {
    
    private array $categories = [];
    
    public function __construct(string $title, string $excerpt, string $content, int $autor, string $created_at){
        $this->title = $title;
        $this->excerpt = $excerpt;
        $this->content = $content;
        $this->autor = $autor;
        $this->created_at = $created_at;
    }
    
    public function getTitle() : string {
        return $this->title;
    }
    
    public function setTitle(string $title) : void{
        $this->title = $title;
    }
    
    public function getExcerpt() : string {
        return $this->excerpt;
    }
    
    public function setExcerpt(string $excerpt) : void{
        $this->excerpt = $excerpt;
    }
    
    public function getContent() : string {
        return $this->content;
    }
    
    public function setContent(string $content) : void{
        $this->content = $content;
    }
    
    public function getAutor() : int {
        return $this->autor;
    }
    
    public function setAutor(int $autor) : void{
        $this->autor = $autor;
    }
    
    public function getDate() : string {
        return $this->created_at;
    }
    
    public function setDate(string $created_at) : void{
        $this->created_at = $created_at;
    }
    
    public function getCategories() : array {
        return $this->categories;
    }
    
    public function setCategories(array $categories) : void {
        $this->categories = $categories;
    }
    
    public function addCategory(Category $category) : void {
        if(!in_array($category, $this->categories, true)){
            $this->categories[] = $category;
        }
    }
    
}

?>