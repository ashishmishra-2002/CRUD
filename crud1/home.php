<?php
session_start();

if(!isset($_SESSION['email'])){
    
    header('Location:login.php');
}
include 'connect.php';
?>

<?php


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Page</title>
</head>
<body>

<?php
include 'pages/navbar.php';
?>


    <div class="container mt-5">
    
<h2>Welcome <?php echo $_SESSION['first_name'];?> !</h2>
    

<a href="logout.php" class="btn btn-primary mt-5" name="logout" >Logout</a>
    
    </div>
    
</body>
</html>