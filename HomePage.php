<?php
/**
 * Created by PhpStorm.
 * User: 1204848
 * Date: 02/11/2015
 * Time: 13:22
 */

$access_level = $_COOKIE['access_level'];

echo $_COOKIE['access_level'];

function displayAccessLevelInformation($access_level) {
    if ($access_level == 'standarduser') {
        echo "<p>You are currently logged in as a standard user</p>";
    }
    elseif ($access_level == "root") {
        echo "<p>You are currently logged in as a root user</p>";
        echo "<p>You now have access to additional administrative features</p>";
    }
}

echo $access_level;