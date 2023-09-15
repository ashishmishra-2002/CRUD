<?php
    include 'connect.php';

    if(isset($_POST['register'])){
      $first_name = $_POST['first_name'];
      $last_name = $_POST['last_name'];

      
      //    $image = $_POST['image'];
      $img_name = $_FILES['image']['name'];
      $img_size = $_FILES['image']['size'];
      $img_tmp_name = $_FILES['image']['tmp_name'];
      move_uploaded_file($img_tmp_name,"./img/".$img_name);


      $phone = $_POST['phone'];
      $email = $_POST['email'];
      $password = $_POST['password'];
      $confirm_password = $_POST['confirm_password'];
      if($password and $confirm_password <= 9999){
        if($password and $confirm_password > 1000){
            if($password == $confirm_password){
                $insert_query = "INSERT INTO USER_TABLE5(first_name,last_name,phone,email,password,confirm_password) 
          VALUES('$first_name','$last_name','$phone','$email','$password','$confirm_password')";
    
          $result = mysqli_query($conn,$insert_query);
    
          if($result){
            echo "Data inserted successfully";
          }else{
            die(mysqli_error($conn));
          }
            }else{
                echo "Password Not Matched!";
            }
        }else{ 
            echo "Password Should Be More Than 4 Digits!";
        }
        
    }else{
        echo "Password Should Be Less Than 4 Digits!";
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
        <form method="post" action="" enctype="multipart/form-data">
            <div class="mb-3">
                <label  class="form-label">First Name:</label>
                <input type="text" class="form-control" name="first_name">
            </div>
            <div class="mb-3">
                <label  class="form-label">Last Name:</label>
                <input type="text" class="form-control" name="last_name">
            </div>
            <div class="mb-3">
                <label  class="form-label">Image:</label>
                <input type="file" class="form-control" name="image">
            </div>
            <div class="mb-3">
                <label  class="form-label">Phone Number:</label>
                <input type="number" class="form-control" name="phone">
            </div>
            <div class="mb-3">
                <label  class="form-label">Email address:</label>
                <input type="email" class="form-control" name="email">
            </div>
            <div class="mb-3">
                <label  class="form-label">Password:</label>
                <input type="password" class="form-control" name="password">
            </div>
            <div class="mb-3">
                <label  class="form-label">Confirm Password:</label>
                <input type="password" class="form-control" name="confirm_password">
            </div>
            
            <button type="submit" class="btn btn-primary" name="register">Register</button>
        </form>
    </div>

    

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" ></script>
</body>
</html>