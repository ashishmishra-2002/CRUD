<?php

$host = 'localhost';
$username = 'root';
$password = 'root';
$databse = 'crud';

$conn = mysqli_connect($host, $username, $password, $databse);
if($conn){
    echo "";
}else{
    die(mysqli_error($conn));
}
?>