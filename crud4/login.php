<?php
include 'connect.php';
include 'navbar.php';

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM register 
    WHERE email = '$email' AND password = '$password'";

    $result = mysqli_query($conn,$sql);

    if($result){
        $num = mysqli_num_rows($result);
        if($num>0){
            $row = mysqli_fetch_array($result);
            $first_name = $row['first_name'];
            echo "Login successful!";
            session_start();
            $_SESSION['email'] = $email;
            $_SESSION['first_name'] = $first_name;
            header("Location:welcome.php");
        }else{
            echo "User Not exists";
        }
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <form method="post" action="" class="">
            <label for="">Email:</label>
            <input type="email" class="" name="email"><br><br>
            <label for="">Password:</label>
            <input type="password" class="" name="password"><br><br>
            <input type="submit" class="" name="login" name="Login">
        </form>
    </div>

</body>
</html>