<?php
include 'connect.php';
session_start();
if (!isset($_SESSION['email'])) {
    header('location:login.php');
    
}

?>



<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>View Page</title>
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
                <th>Sr No.</th>
                <th>First Name</th>
                <th>LastName</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Password</th>
                <th>Operations</th>
            </tr>
        </thead>

        <?php
        $sql = 'SELECT * FROM register';
        $result = mysqli_query($conn,$sql);
        
        if($result){
            while($row = mysqli_fetch_array($result)){
                $id=$row['id'];
                $first_name=$row['first_name'];
                $last_name=$row['last_name'];
                $email=$row['email'];
                $phone=$row['phone'];
                $password=$row['password'];
    
                echo "<tbody>
                <tr>
                    <td>"."$id"."</td>
                    <td>"."$first_name"."</td>
                    <td>"."$last_name"."</td>
                    <td>"."$email"."</td>
                    <td>"."$phone"."</td>
                    <td>"."$password"."</td>
                    <td>
                        <a href='update.php?update_id=$id' class='btn btn-warning' >Update</a>
                        <a href='delete.php?delete_id=$id' class='btn btn-danger' >Delete</a>
                    </td>
                </tr>
            </tbody>";
            }
            
        
        }
        ?>

        
    </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>