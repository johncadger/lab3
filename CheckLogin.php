<?php
/**
 * Created by PhpStorm.
 * User: 1204848
 * Date: 02/11/2015
 * Time: 13:22
 */

$username = $_POST["username"];
$password = $_POST["password"];

if ($username = "a"){
    if ($password = "b"){
        setcookie('username','a');
        setcookie('access_level','standard');
        header('Location: http://1204848-lab1.azurewebsites.net/HomePage.php');
    }
}

