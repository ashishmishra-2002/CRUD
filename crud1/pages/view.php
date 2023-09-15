<?php
session_start();
if(!isset($_SESSION['email'])){
  header('location:/login/login1/login.php');
}
include('../connect.php');



// if (isset($_POST['register'])){
//     $first_name = $_POST['first_name'];
//     $last_name = $_POST['last_name'];
//     $email = $_POST['email'];
//     $phone = $_POST['phone'];
//     $password = $_POST['password'];

//     $sql = "INSERT INTO register(first_name,last_name,email,phone,password) 
//     VALUES('$first_name','$last_name','$email','$phone','$password')";

//     $result = mysqli_query($conn,$sql);

//     if ($result){
//         echo "Data saved successfully";
//     }else{
//         die(mysqli_error($conn));
//     }
    


// }



?>



<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registration Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>
    
<?php
include 'navbar.php';
?>

<div class="container mt-5">
<table class="table">
  <thead>
    <tr>
      <th scope="col">Sr No.</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">Password</th>
      <th scope="col">Operations</th>
    </tr>
  </thead>
<?php

$sql = "SELECT id,first_name,last_name,email,phone,password from register";
$result = mysqli_query($conn,$sql);

if ($result){
    while ($row = mysqli_fetch_array($result)){
        $id=$row['id'];
        $first_name=$row['first_name'];
        $last_name=$row['last_name'];
        $email=$row['email'];
        $phone=$row['phone'];
        $password=$row['password'];
        echo "<tbody>
        <tr>
          <th scope='row'>".$id."</th>
          <td>".$first_name."</td>
          <td>".$last_name."</td>
          <td>".$email."</td>
          <td>".$phone."</td>
          <td>".$password."</td>
          <td><a href='update.php?update_id=$id' class='btn btn-warning'>Update</a> <a href='delete.php?delete_id=$id' class='btn btn-danger'>Delete</a></td>
        </tr>
      </tbody>";
    }
    // $first_name=$row['first_name'];
    // echo $first_name;
}

?>

  <!-- <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
      <td>Otto</td>
      <td>@mdo</td>
      <td><a href="" class="btn btn-warning">Update</a> <a href="" class="btn btn-danger">Delete</a></td>
    </tr>
  </tbody> -->
</table>

</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  </body>
</html>