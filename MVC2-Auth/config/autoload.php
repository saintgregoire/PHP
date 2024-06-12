<?php
require './models/User.php';
session_start();
require './managers/AbstractManager.php';
require './managers/UserManager.php';
require './config/Router.php';
require './controllers/AuthController.php';
require './controllers/PageController.php';



?>