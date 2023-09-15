<?php
include 'connect.php';

$update_id = $_GET['update_id'];

$select = "SELECT * FROM user_table7 WHERE id = $update_id";
$select_query = mysqli_query($con, $select);

if ($select_query) {
    $user_data = mysqli_fetch_array($select_query);
    if ($user_data) {
        $first_name = $user_data['first_name'];
        $last_name = $user_data['last_name'];
        $phone = $user_data['phone'];
        $email = $user_data['email'];
        $password = $user_data['password'];
        $confirm_password = $user_data['confirm_password'];
    } else {
        // Handle the case where no data is found for the given update_id
        // For example: 
        echo "No data found for update_id: $update_id";
    }
} else {
    // Handle the case where the query has an error
    // For example: 
    echo "Query error: " . mysqli_error($con);
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
                <input type="text" class="form-control" name="first_name" value="<?php echo $user_data['first_name'];?>" required>
            </div>
            <div class="mb-3">
                <label  class="form-label">Last Name:</label>
                <input type="text" class="form-control" name="last_name" value="<?php echo $user_data['last_name'];?>" required>
            </div>
            <div class="mb-3">
                <label  class="form-label">Phone Number:</label>
                <input type="number" class="form-control" name="phone" value="<?php echo $user_data['phone'];?>" required>
            </div>
            <div class="mb-3">
                <label  class="form-label">Email address:</label>
                <input type="email" class="form-control" name="email" value="<?php echo $user_data['email'];?>" required>
            </div>
            <div class="mb-3">
                <label  class="form-label">Password:</label>
                <input type="password" class="form-control" name="password" value="<?php echo $user_data['password'];?>" required>
            </div>
            <div class="mb-3">
                <label  class="form-label">Confirm Password:</label>
                <input type="password" class="form-control" name="confirm_password" value="<?php echo $user_data['confirm_password'];?>" required>
            </div>
            
            <button type="submit" class="btn btn-primary" name="update">Update</button>
        </form>
    </div>

    

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" ></script>
</body>
</html>