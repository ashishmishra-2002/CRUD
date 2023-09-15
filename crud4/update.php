<?php
include 'connect.php';
include 'navbar.php';

$pass_error= false;
$register_success= false;

$id = $_GET['update_id'];

if (isset($_POST['submit'])){
    
  $first_name = $_POST['first_name'];
  $last_name = $_POST['last_name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $password = $_POST['password'];
  $confirm_password = $_POST['confirm_password'];

  if($password == $confirm_password){
    $sql = "UPDATE register 
    SET first_name = '$first_name', last_name = '$last_name', email = '$email', phone = '$phone', 
    password = '$password', confirm_password = '$confirm_password'
    WHERE id = '$id'";

    $result = mysqli_query($conn,$sql);
    if($result){
      // echo "Register Successfully!";
      $register_success = true;
    }else{
      die(mysqli_error($conn));
    }

  }else{
    $pass_error= true;
  }
  
   
}


?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registration Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>
    
    <div class="container">
    <?php 
    if($register_success){
      echo "<div class='alert alert-success'><strong>Updated Successfully!</strong></div>";
    }

    if($pass_error){
      echo "<div class='alert alert-danger'><strong>Password Not Matched!</strong></div>";
    }
    ?>
    <form method="post" action="">
        <div class="mb-3">
            <label  class="form-label">First Name:</label>
            <input type="text" class="form-control" name="first_name" >
        </div>
        <div class="mb-3">
            <label  class="form-label">Last Name:</label>
            <input type="text" class="form-control" name="last_name" >
        </div>
        <div class="mb-3">
            <label  class="form-label">Email address:</label>
            <input type="email" class="form-control" name="email" >
        </div>
        <div class="mb-3">
            <label  class="form-label">Phone Number:</label>
            <input type="number" class="form-control" name="phone" >
        </div>
        <div class="mb-3">
            <label  class="form-label">Password:</label>
            <input type="password" class="form-control" name="password" >
        </div>
        <div class="mb-3">
            <label  class="form-label">Confirm Password:</label>
            <input type="password" class="form-control" name="confirm_password" >
        </div>
        <?php
        // if($pass_error){
        //   echo "<div class='alert alert-danger'><strong>Password Not Matched!</strong></div>";
        // }
        ?>
        <input type="submit" class="btn btn-primary" name="submit" value="Submit">
    </form>
    </div>
    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>