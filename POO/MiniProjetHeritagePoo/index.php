<?php
require "./managers/AbstractManager.class.php";
require "./managers/UserManager.class.php";
require "./managers/CategoryManager.class.php";
require "./managers/PostManager.class.php";



$user_test = new User('LeopoldMssss', 'maksym.voznicka@gmail.com', '123M', 'Admin', '2024-06-03 15:24:02');
$user = new UserManager();
// var_dump($user->findAll());
// var_dump($user->findOne(2));
// $user->create($user_test);
// $user->update($user_test);
// $user->delete(1);

$post_test = new Post('Main Post', 'I like coding so much', 'no content', 1, '2024-06-03 15:24:02');
$post = new PostManager();

// var_dump($post->findAll());
// var_dump($post->findOne(2));
// $post->create($post_test);
// $post->update($post_test);
// $post->delete(7);

$category_test = new Category('Important', 'no description yet');
$category = new CategoryManager();

// var_dump($category->findAll());
// var_dump($category->findOne(1));
// $category->create($category_test);
// $category->update($category_test);
// $category->delete(4);



?>