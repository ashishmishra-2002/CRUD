<?php
include 'connect.php';

$select = "SELECT * FROM user_table6";
$select_query = mysqli_query($conn,$select);
$user_data = mysqli_fetch_array($select_query);

$user_email = '';

if(empty($user_data)){
    echo "";
}else{
    $user_email = $user_data['email'];
}


if (isset($_POST['register'])) {
    $first_name= $_POST['first_name'];
    $last_name= $_POST['last_name'];
    $phone= $_POST['phone'];
    $email= $_POST['email'];
    $password= $_POST['password'];
    $confirm_password= $_POST['confirm_password'];

     
    if("$email" == "$user_email"){
    echo "Email already registered!";
    }else{
        if((strlen($phone) != 10)){
            echo "Mobile no must contain 10 digits.";
        }else{
            if(($password && $confirm_password >= 1000) && ($password && $confirm_password <= 9999)){
                if("$password" == "$confirm_password") {
                    $insert = "INSERT INTO user_table6 (first_name,last_name,phone,email,password,confirm_password) 
                    VALUES ('$first_name','$last_name','$phone','$email','$password','$confirm_password')";
            
                    $query = mysqli_query($conn, $insert);
            
                    if($query){
                        echo "Registration successful!";
                    }else{
                        die(mysqli_error($conn));
                    }
                }else{
                    echo "Password not matches";
                }
            }else{
                echo " Password Must be Atleast 4 digits";
            }
        }
    
        
    }

    
    
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" >
  </head>
<body>
    <?php
    include 'navbar.php';
    ?>
    <div class="container mt-5">
        <form method="post" action="">
            <div class="mb-3">
                <label  class="form-label">First Name:</label>
                <input type="text" class="form-control" name="first_name" required>
            </div>
            <div class="mb-3">
                <label  class="form-label">Last Name:</label>
                <input type="text" class="form-control" name="last_name" required>
            </div>
            <div class="mb-3">
                <label  class="form-label">Phone Number:</label>
                <input type="number" class="form-control" name="phone" required>
            </div>
            <div class="mb-3">
                <label  class="form-label">Email address:</label>
                <input type="email" class="form-control" name="email" required>
            </div>
            <div class="mb-3">
                <label  class="form-label">Password:</label>
                <input type="password" class="form-control" name="password" required>
            </div>
            <div class="mb-3">
                <label  class="form-label">Confirm Password:</label>
                <input type="password" class="form-control" name="confirm_password" required>
            </div>
            
            <button type="submit" class="btn btn-primary" name="register">Register</button>
        </form>
    </div>

    

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" ></script>
</body>
</html>