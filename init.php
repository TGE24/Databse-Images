<?php

$dbHost = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "uploadImg";


$db = new mysqli("$dbHost", "$dbUsername", "$dbPassword", "$dbName");

// Check connection
if($db -> connect_error) {
 die("ERROR: Could not connect. " . $db ->connect_error);
}
?>
