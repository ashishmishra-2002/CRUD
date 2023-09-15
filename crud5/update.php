<?php
include 'connect.php';

$id = $_GET['update_id'];
$select = "SELECT * FROM user_table5 WHERE id=$id";
$query = mysqli_query($conn,$select);

$row = mysqli_fetch_array($query);



if (isset($_POST['update'])){
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    
    if($password and $confirm_password <= 9999){
        if($password and $confirm_password > 1000){
            if($password == $confirm_password){
                $sql = "UPDATE user_table5
                SET first_name = '$first_name', last_name = '$last_name', phone = '$phone', email = '$email', password = '$password', confirm_password = '$confirm_password' 
                WHERE id = '$id'";
            
                $result = mysqli_query($conn,$sql);
            
                if($result){
                    echo "User Details updated successfully";
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
    <title>Update Details Form</title>
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
                <input type="text" class="form-control" name="first_name" value="<?php echo $row['first_name'];?>">
            </div>
            <div class="mb-3">
                <label  class="form-label">Last Name:</label>
                <input type="text" class="form-control" name="last_name" value="<?php echo $row['last_name'];?>">
            </div>
            <div class="mb-3">
                <label  class="form-label">Phone Number:</label>
                <input type="number" class="form-control" name="phone" value="<?php echo $row['phone'];?>">
            </div>
            <div class="mb-3">
                <label  class="form-label">Email address:</label>
                <input type="email" class="form-control" name="email" value="<?php echo $row['email'];?>">
            </div>
            <div class="mb-3">
                <label  class="form-label">Password:</label>
                <input type="password" class="form-control" name="password" value="<?php echo $row['password'];?>">
            </div>
            <div class="mb-3">
                <label  class="form-label">Confirm Password:</label>
                <input type="password" class="form-control" name="confirm_password" value="<?php echo $row['confirm_password'];?>">
            </div>
            
            <button type="submit" class="btn btn-primary" name="update">Update</button>
        </form>
    </div>

    

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" ></script>
</body>
</html>