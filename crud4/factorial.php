<?php
// error_reporting(E_ALL);
$fact = "";
if(isset($_POST['submit'])){
    $number = $_POST['number'];
    $fact = 1;
    while ($number>=1){
        $fact = $number * $fact;
        $number--;
    }
    // echo $fact;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Find Factorial</title>
</head>
<body>
    <form action="factorial.php" method="post" class="">
        <label for="" class="">Enter a number: </label>
        <input type="text" class="number" name="number">
        <input type="submit" class="" name="submit" value="Submit">

    <?php
    // Display the output only if $fact is not empty
    if (!empty($fact)) {
        echo "<div>Factorial: " . $fact . "</div>";
    }
    ?>
        <!-- <button class="" name="submit" value=""><a href="fact.php" class="">Submit</a></button> -->
    </form>
    
</body>
</html>