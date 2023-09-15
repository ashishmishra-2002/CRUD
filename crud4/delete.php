<?php
include 'connect.php';

$id = $_GET['delete_id'];
if(isset($_GET['delete_id'])) {
    $sql = "DELETE FROM register WHERE id=$id";
    $result = mysqli_query($conn, $sql);

    if($result) {
        header('location:view.php ');
    }

}

?>