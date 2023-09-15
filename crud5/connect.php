<?php
$conn = mysqli_connect('localhost','root','root','crud');
if($conn){
    echo "";
}else{
    die(mysqli_error($conn));
}
?>