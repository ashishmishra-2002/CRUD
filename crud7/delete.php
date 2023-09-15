<?php
// Delete Page
include 'connect.php';
$delete_id = $_GET['delete_id'];

if(isset($_GET['delete_id'])){
    $delete_query = "DELETE FROM user_table7 WHERE id = $delete_id";
    $result_query = mysqli_query($con,$delete_query);
    if($result_query){
        header('Location:view.php');
    }
}
?>