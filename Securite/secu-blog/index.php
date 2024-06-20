<?php
/**
 * @author : Gaellan
 * @link : https://github.com/Gaellan
 */

session_start();

require "config/autoload.php";

$csrfManager = new CSRFTokenManager();
$csrfToken = $csrfManager->generateCSRFToken();
if(!isset($_SESSION['csfr_token']))
{
  $_SESSION['csrf_token'] = $csrfToken;
}


$router = new Router();

$router->handleRequest($_GET);