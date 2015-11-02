<?php
/**
 * Created by PhpStorm.
 * User: 1204848
 * Date: 02/11/2015
 * Time: 15:42
 */


$username = $_POST["username"];
$password = $_POST["password"];

if ($username = "a"){
    if ($password = "b"){
        $_SESSION['username'] = $username;
        $_SESSION['access_level'] = "standarduser";
        header('Location: http://1204848-lab1.azurewebsites.net/HomePage2.php');
    }
}