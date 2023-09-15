<?php 

include 'connect.php';

session_start();

if(!isset($_SESSION['email'])) {
    header('Location:login.php');
}

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
    include 'navbar.php';
    ?>
    <div class="container mt-5">

    <h1 class="text-center">Welcome <?php echo $_SESSION['first_name']; ?></h1><br>
    <h2 class="text-center">Email Address: <?php echo $_SESSION['email']; ?></h2>
    <a href="logout.php" class="btn btn-dark mt-5 ">Logout</a>
    </div>



    

    
    
</body>
</html>