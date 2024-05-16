<?php 

  $route = null;
  
  if(isset($_GET["route"])){
      $route = $_GET["route"];
  }
  else{
      $route = null;
  }
  
  require "layout.phtml";
  
?>