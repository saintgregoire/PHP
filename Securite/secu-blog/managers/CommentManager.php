<?php
/**
 * @author : Gaellan
 * @link : https://github.com/Gaellan
 */


class CommentManager extends AbstractManager
{
    
    public function __construct(){
        parent::__construct();
    }
    
    public function findByPost(int $postId) : array {
        $comments =[];
        $query = $this->db->prepare('SELECT * FROM comments WHERE post_id = :post_id');
        $parameters = [
            'post_id' => $postId
            ];
        $query->execute($parameters);
        $result = $query->fetchAll(PDO::FETCH_ASSOC);
        
        foreach($result as $item){
            $userManager = new UserManager();
            $author = $userManager->findById($item['user_id']);
            $postManager = new PostManager();
            $post = $postManager->findOne($item['post_id']);
            
            $comment = new Comment($result['id'], $result['content'], $author, $post);
            
            $comments[] = $comment;
        }
        
        return $comments;
        
    }
    
    
    public function create(Comment $comment) : void {
        $query = $this->db->prepare('INSERT INTO comments (id, content, user_id, post_id) VALUES (:id, :content, :user_id, :post_id)');
        $parameters = [
            'id' => $comment->getId(),
            'content' => $comment->getContent(),
            'user_id' => $comment->getUserId()->getId(),
            'post_id' => $comment->getPostId()->getId()
            ];
            
        $query->execute($parameters);
            
    }

}