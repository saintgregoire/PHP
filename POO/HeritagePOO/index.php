<?php
require "Reader.class.php";

$reader = new Reader('maksym.voznicka@gmail.com', '123MMM');
$newBookList = $reader->addBookToFavorites('Harry Poter');
$newBookList = $reader->addBookToFavorites('POO');
$newBookList = $reader->removeBookFromFavorites('POO');

var_dump($newBookList);
var_dump($reader->login());


?>