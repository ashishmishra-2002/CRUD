<?php

$host = "localhost";
$username ="root";
$password ="root";
$database ="login2";

$conn = mysqli_connect($host,$username,$password,$database);

if($conn){
    echo "";
}else{
    die(mysqli_error($conn));
}

?>