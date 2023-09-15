<?php
include 'connect.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
  $email = $_POST['email'];
  $password = $_POST['password'];
 

  $sql = "SELECT first_name, email, password FROM register where email='$email' and password='$password'";
  $result = mysqli_query($conn,$sql);

  if($result){
    $num = mysqli_num_rows($result);
    if ($num>0){
      $row = mysqli_fetch_assoc($result);
      $first_name = $row['first_name'];
      echo "Login successful";


      session_start();
      $_SESSION['email'] = $email;
      $_SESSION['first_name'] = $first_name;
      
      header("Location:home.php");
    }else{
      echo "Invalid Data";
    }
  }

}

?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>
    
    
<?php
include 'pages/navbar.php';
?>

<div class="container mt-5">
    <h2 class="text-center">Login Form</h2>
    <form  method="post">
        <div class="mb-3">
            <label  class="form-label">Email address:</label>
            <input type="email" class="form-control" name="email" id="exampleInputEmail1" required>
        </div>
        <div class="mb-3">
            <label  class="form-label">Password</label>
            <input type="password" class="form-control" name="password" id="exampleInputPassword1">
        </div>
        <button type="submit" class="btn btn-primary" name="login">Login</button>
    </form>

</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  </body>
</html>