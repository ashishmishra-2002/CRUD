<?php
include 'connect.php';
$success = false;
$error = false;
if(isset($_POST['register'])) {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];

    $sql = "INSERT INTO register(first_name,last_name,email,phone,password) VALUES('$first_name','$last_name','$email','$phone','$password')";
    $result = mysqli_query($conn, $sql);

    if($result){
        $success = true;
        // echo "Inserted successfully";
    }else{
        $error = true;
    }
}
?>



<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>
    <?php
    include 'navbar.php';
    ?>

<?php
    if ($success) {
        // echo "<div class='alert alert-success' role='alert'>
        echo "<p class=' text-bg-success'><strong>Success: </strong>Inserted successfully</p>";
    //   </div>";
        //echo "Updated successfully";
    }elseif ($error){
        echo "<p class=' text-bg-danger'><strong>Error: </strong> Can't Insert!</p>";
    }
    ?>

    <div class="container mt-5">
        <form method="post" action="">
            <div class="mb-3">
                <label  class="form-label">First Name</label>
                <input type="text" class="form-control" id="exampleInputEmail1" required name="first_name">
            </div>
            <div class="mb-3">
                <label  class="form-label">Last Name</label>
                <input type="text" class="form-control" id="exampleInputEmail1" required name="last_name">
            </div>
            <div class="mb-3">
                <label  class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" required name="email">
            </div>
            <div class="mb-3">
                <label  class="form-label">Phone</label>
                <input type="number" class="form-control" id="exampleInputEmail1" required name="phone">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" required name="password">
            </div>
            
            <button type="submit" class="btn btn-dark" name="register">Register</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>