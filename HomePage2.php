<?php
/**
 * Created by PhpStorm.
 * User: 1204848
 * Date: 02/11/2015
 * Time: 15:43
 */
session_start();

echo $_SESSION['access_level'];

displayAccessLevelInformation($_SESSION['access_level']);

function displayAccessLevelInformation($accesslevel) {
    if ($accesslevel == "standarduser") {
        echo "<p>You are currently logged in as a standard user</p>";
    }
    elseif ($accesslevel == "root") {
        echo "<p>You are currently logged in as a root user</p>";
        echo "<p>You now have access to additional administrative features</p>";
    }
}