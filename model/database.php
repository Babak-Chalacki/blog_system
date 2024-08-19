<?php

$connection = new mysqli("localhost", "root", "", "blog");

if ($connection->connect_error) {
    echo "Connection failed: " . $connection->connect_error;
} else {
    
    $connection->query("SET NAMES 'utf8'");
}


?>