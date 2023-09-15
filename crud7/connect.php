<?php

$localhost = 'localhost';
$username = 'root';
$password = 'root';
$database = 'crud';

$con = mysqli_connect($localhost, $username, $password, $database);
if (!$con) {
    echo "Could not connect to the database";
}
?>