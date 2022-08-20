<?php
session_start();
$con=mysqli_connect("localhost","root","","skul_pro1");
if(!isset($_SESSION['user_name'])){
    header("location:login.php");
    die();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="home.css">
    <title>Home page</title>
</head>
<body>

    <div class="wrapper">
    <?php include 'files/banner.php' ?>
    <?php include 'files/menu.php' ?>
        <div class="content"></div>
        <?php include 'files/footer.php' ?>
    </div>
</body>
</html>