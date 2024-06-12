<?php
/**
 * @author : Gaellan
 * @link : https://github.com/Gaellan
 */

session_start();

require "config/connexion.php";

if(isset($_GET['route']))
{
    $route = $_GET['route'];
}
else
{
    $route = NULL;
}

require "templates/layout.phtml";
