<?php
include 'connect.php';



?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Users</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" >
  </head>
<body>
    <?php
    include 'navbar.php';
    
    if (isset($_GET['deleted_id']) && isset($_GET['user_fname']) && isset($_GET['user_lname'])) {
        $deleted_id = $_GET['deleted_id'];
        $user_fname = $_GET['user_fname'];
        $user_lname = $_GET['user_lname'];
        echo "Details deleted successfully!";
    }

    if (isset($_GET['update_id'])) {
        
        echo "Details Updated successfully!";
    }
    
    
    ?>
    <div class="container-fluid mt-5">
    <table class="table">
        <thead>
            <tr>
            <th scope="col">Sr No.</th>
            <th scope="col">First Name</th>
            <th scope="col">Last Name</th>
            <th scope="col">Phone</th>
            <th scope="col">Email</th>
            <th scope="col">Password</th>
            <th scope="col">Confirm Password</th>
            <th scope="col">Operations</th>
            </tr>
        </thead>
        <?php
        $sql = "SELECT * FROM user_table6";
        $query = mysqli_query($conn,$sql);
        $count = 1;
        while($row = mysqli_fetch_array($query)){
            $id = $row['id'];
            $password = md5($row['password']);
            $confirm_password = md5($row['confirm_password']);
            
            echo "<tbody>
            <tr>
            <th scope='row'>".$count."</th>
            <td>".$row['first_name']."</td>
            <td>".$row['last_name']."</td>
            <td>".$row['phone']."</td>
            <td>".$row['email']."</td>
            <td>".$password."</td>
            <td>".$confirm_password."</td>
            <td>
                <a href='update.php?update_id=$id' class='btn btn-warning'>Update</a>
                <a href='delete.php?delete_id=$id' class='btn btn-danger'>Delete</a>
            </td>
            </tr>
        </tbody>";
        $count++;
        }

        

   
        ?>

        
    </table>
    </div>

    

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" ></script>
</body>
</html>