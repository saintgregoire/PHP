<?php
session_start();


if(isset($_POST["nickname"]))
{
    $_SESSION["nickname"] = $_POST["nickname"];
}

