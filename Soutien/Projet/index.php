<?php
    
    
    
    require "data/posts.php";
    
    $route = null;
    
    if(isset($_GET["route"])){
       $route = $_GET["route"];
    }
    
    $category = null;
    
    if(isset($_GET["category"])){
      $category = $_GET["category"];
    }
    
    $design = [
        $posts["design"][0],
        $posts["design"][1],
        $posts["design"][2],
        $posts["design"][3],
        $posts["design"][4]
    ];

    $dev = [
        $posts["development"][0],
        $posts["development"][1],
        $posts["development"][2],
        $posts["development"][3],
        $posts["development"][4]
    ];
    
    $accessibility = [
        $posts["accessibility"][0],
        $posts["accessibility"][1],
        $posts["accessibility"][2],
        $posts["accessibility"][3],
        $posts["accessibility"][4]
    ];
    
    $post = null;
    
    if(isset($_GET["post"])){
        $post = $_GET["post"];
    }
    
    function checkPost($checkVar, $nb) {
        switch($checkVar){
            case 'design':
                return $design[$nb]['content'];
                break;
            case 'development':
                return $dev[$nb]['content'];
                break;
            case 'accessibility':
                return $accessibility[$nb]['content'];
                break;
        }
    }
    
    require "layout.phtml";
    
?>