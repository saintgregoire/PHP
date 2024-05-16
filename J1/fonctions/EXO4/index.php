<?php
 function getFirst(array $arr) : ? int {
     if ($arr === []){
         return null;
     }
     else{
         return $arr[0];
     }
 }
 
 echo getFirst([13, 24, 45]) . "<br>";
 echo getFirst([])
?>