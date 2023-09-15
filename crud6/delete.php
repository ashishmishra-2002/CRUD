<?php
include 'connect.php';
// Delete Page

if(isset($_GET['delete_id'])){
    $delete_id = $_GET['delete_id'];

    $select = "SELECT * FROM user_table6 WHERE id= $delete_id";
    $result = mysqli_query($conn,$select);
    $user_data = mysqli_fetch_array($result);
    $user_fname = $user_data['first_name'];
    $user_lname = $user_data['last_name'];
    
    $delete = "DELETE FROM user_table6 WHERE id = $delete_id";
    $query = mysqli_query($conn, $delete);
    
    if($query){
        header('location:view.php?deleted_id='.$delete_id.'&user_fname='.$user_fname.'&user_lname='.$user_lname);
    }else{
        die(mysqli_error($conn));
    }
}




?>