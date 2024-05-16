<?php
  
  function check($name) {
      if(isset($_POST["$name"]) && !empty($_POST["$name"])){
          return $_POST["$name"];
      }
      else{
          return null;
      }
  }
  
  $nom = check("nom");
  $prenom = check("prenom");
  $email = check("email");
  $tel = check("tel");
  $linkedin = check("linkedin");
  $github = check("github");
  $bio = check("bio");
  $loisir1 = check("loisir1");
  $loisir2 = check("loisir2");
  $loisir3 = check("loisir3");
  $loisir4 = check("loisir4");
  
  $fr = check("fr");
  $an = check("an");
  $ar = check("ar");
  $br = check("br");
  $es = check("es");
  
  $html = check("html");
  $css = check("css");
  $js = check("js");
  $php = check("php");
  $sql = check("sql");
  
  $sass = check("sass");
  $bootstrap = check("bootstrap");
  $symfony = check("symfony");
  $lavarel = check("lavarel");
  
  $photoshop = check("photoshop");
  $illustrator = check("illustrator");
  $xd = check("xd");
  $figma = check("figma");
  
  $color = check("color");
  
  require "cv.phtml";
?>