<?php
include 'connect.php';
$id = $_GET['delete_id'];
if (isset($_REQUEST['delete_id'])){
    $sql = "DELETE FROM register where id='$id'";
    $result = mysqli_query($conn,$sql);
    if($result){

        echo "<script>alert('Deleted successfully');</script>";
        header("Location: view.php");
    }else {
        die(mysqli_error($conn));
    }
}

?>