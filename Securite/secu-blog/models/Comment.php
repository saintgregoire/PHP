<?php
/**
 * @author : Gaellan
 * @link : https://github.com/Gaellan
 */


class Comment
{

    public function __construct(private int $id, private string $content, private User $user_id, private Post $post_id){
        
    }
    
    public function getId() : int {
        return $this->id;
    }
    
    public function setId( int $id ) : void  {
        $this->id = $id;
    }
    
    public function getContent() : string {
        return $this->content;
    }
    
    public function setContent( string $content) : void {
        $this->content = $content;
    }
    
    public function getUserId() : User{
        return $this->user_id;
    }
    
    public function setUserId( User $user_id) : void {
        $this->user_id = $user_id;
    }
    
    public function getPostId() : Post {
        return $this->post_id;
    }
    
    public function setPostId( Post $post_id ) : void {
        $this->post_id = $post_id;
    }



}