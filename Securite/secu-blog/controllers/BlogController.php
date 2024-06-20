<?php
/**
 * @author : Gaellan
 * @link : https://github.com/Gaellan
 */


class BlogController extends AbstractController
{
    public function home() : void
    {
        $this->render("home", []);
    }

    public function category(string $categoryId) : void
    {
        // si la catégorie existe
        $categoryManager = new CategoryManager();
        $id = (int)$categoryId;
        $category = $categoryManager->findOne($id);
        if($category !== null){
            $_SESSION['category'] = $category;
            $this->render("category", []);
        }
        else{
            // sinon
            $this->redirect("index.php");
        }
        
    }

    public function post(string $postId) : void
    {
        // si le post existe
        $postManager = new PostManager();
        $id = (int)$postId;
        $post = $postManager->findOne($id);
        if($post !== null){
            $_SESSION['post'] = $post;
           $this->render("post", []); 
        }
        else{
            // sinon
            $this->redirect("index.php");
        }
    }

    public function checkComment() : void
    {
        $commentManager = new CommentManager();
        $post_id = $_POST["post_id"];
        $id = (int)$post_id;
        $comments = $commentManager->findByPost($id);
        $this->redirect("index.php?route=post&post_id={$_POST["post_id"]}");
    }
}