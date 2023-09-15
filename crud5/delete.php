<?php
// Delete Page
include 'connect.php';
$id = $_GET['delete_id'];
if(isset($_GET['delete_id'])){
    $sql = "DELETE FROM user_table5 WHERE id = '$id'";
    $result = mysqli_query($conn, $sql);
    if($result){
        header('Location: view.php');
    }else{
        die(mysqli_error($conn));
    }
}


?>