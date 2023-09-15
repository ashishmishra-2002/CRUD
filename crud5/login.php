<?php
include 'connect.php';

if(isset($_POST['login'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM user_table5 
    WHERE email = '$email' and password = '$password'";

    $result = mysqli_query($conn,$sql);

    if($result){
        $num = mysqli_num_rows($result);
        if($num>0){
            $row = mysqli_fetch_array($result);
            $first_name = $row['first_name'];
            echo "User Exists";
            session_start();
            $_SESSION['email'] = $email;
            $_SESSION['first_name'] = $first_name;
            header('location:welcome.php');
        }else{
            echo "User Not Exists";
        }
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" >
  </head>
<body>
    <?php
    include 'navbar.php';
    ?>
    <div class="container mt-5">
        <form method="post" action="">
            <div class="mb-3">
                <label  class="form-label">Email address</label>
                <input type="email" class="form-control" name="email">
            </div>
            <div class="mb-3">
                <label  class="form-label">Password</label>
                <input type="password" class="form-control" name="password">
            </div>
            
            <button type="submit" class="btn btn-primary" name="login">Login</button>
        </form>
    </div>

    

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" ></script>
</body>
</html>