<?php
session_start();

if(!isset($_SESSION['email']) ){
    header('Location: login.php');
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" >
  </head>
<body>
    <?php
    include 'navbar.php';
    ?>
    <div class="container mt-5">
        <h1 class=" text-center">Welcome 
            <strong>
                <?php
                if(isset($_SESSION['email']) ){
                    echo $_SESSION['first_name']."!"; 
                }else{
                    echo "User!";
                }
                    
                ?>
            </strong></h1>
        <h1 class=" text-center">Your Email: 
            <strong>
                <?php
                if(isset($_SESSION['email']) ){
                    echo $_SESSION['email']; 
                }else{
                    echo "example@example.com";
                }
                    
                ?>
            </strong></h1>
        <a href="logout.php" class="btn btn-danger mt-5 ">Logout</a>
    </div>

    

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" ></script>
</body>
</html>