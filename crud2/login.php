<?php
include 'connect.php';

if(isset($_POST['login'])) {
   
    $email = $_POST['email'];
    
    $password = $_POST['password'];

    $sql = "SELECT first_name,email,password FROM register WHERE email='$email' and password='$password'";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        $num = mysqli_num_rows($result);
        if ($num > 0) {
            $row = mysqli_fetch_assoc($result);
            $first_name = $row['first_name'];
            
    
            session_start();
            $_SESSION['email'] = $email;
            $_SESSION['first_name'] = $first_name; // Add this line to set the session variable
    
            header('location:welcome.php');
        } else {
            echo "Invalid Data";
        }
    }
    else{
        die(mysqli_error($conn));
    }
}
?>



<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>
    <?php
        include 'navbar.php';
    ?>




    <div class="container mt-5">
        <form method="post" action="">
            
            <div class="mb-3">
                <label  class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" required name="email">
            </div>
            
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" required name="password">
            </div>
            
            <button type="submit" class="btn btn-dark" name="login">Login</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>