<?php

require_once('connect.php');



if (isset($_POST['register'])){
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];

    $sql = "INSERT INTO register(first_name,last_name,email,phone,password) 
    VALUES('$first_name','$last_name','$email','$phone','$password')";

    $result = mysqli_query($conn,$sql);

    if ($result){
        echo "Data saved successfully";
    }else{
        die(mysqli_error($conn));
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
    
<?php
include 'pages/navbar.php';
?>

<div class="container mt-5">
    <h2 class="text-center">Registration Form</h2>
    <form method="post" >
        <div class="mb-3">
            <label  class="form-label">First Name:</label>
            <input type="text" class="form-control" name="first_name" id="exampleInputEmail1" required>
        </div>
        <div class="mb-3">
            <label  class="form-label">Last Name:</label>
            <input type="text" class="form-control" name="last_name" id="exampleInputEmail1" required>
        </div>
        <div class="mb-3">
            <label  class="form-label">Email address:</label>
            <input type="email" class="form-control" name="email" id="exampleInputEmail1" required>
        </div>
        <div class="mb-3">
            <label  class="form-label">Phone Number:</label>
            <input type="number" class="form-control" name="phone" id="exampleInputEmail1" required>
        </div>
        <div class="mb-3">
            <label  class="form-label">Password</label>
            <input type="password" class="form-control" name="password" id="exampleInputPassword1">
        </div>
        <input type="submit" name="register" value="Register" id="submit">
    </form>

</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  </body>
</html>