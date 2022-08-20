<?php
session_start();
include 'dbh.php';
$msg="";
if(isset($_POST["log-btn"])){
  
$usname = mysqli_real_escape_string($con, $_POST['uid']);
$pass = mysqli_real_escape_string($con, $_POST['pwd']);

$sql=mysqli_query($con,"SELECT * FROM manager WHERE username='$usname' && password='$pass' "   );
$check=mysqli_num_rows($sql);

if($check > 0){
    while($row =mysqli_fetch_array($sql)){
        $_SESSION['id'] = $row=['id'];
        $_SESSION['user_name'] = $row=['username'];
        $_SESSION['pass_word'] = $row=['password'];
        header("location:home.php");
    }
}else{
    $msg= "Enter valid details";
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Furniture Stock MGMT</title>
</head>
<body>
    <div class="wrapper">
    <div class="banner">
    <h2>Cargo transportation Limited</h2>
    </div> 
        <div class="menu"></div>
        <div class="content">
            <h2><?php echo $msg ?></h2>
     <form action="" method="POST" class="form">
    <table>
    <tr>
     <td><input type="text" name="uid" autocomplete="off" class="input-field" placeholder="insert username"></td>
     </tr>
     <tr>
     <td><input type="password" name="pwd" class="input-field" placeholder="insert password"></td>
     </tr>
     <tr>
        <td> <button type="submit" name="log-btn" class="lg-btn">login</button> or <a href="sign.php" class="sgn">sign up</a></td>
        
     </tr>
    </table>
    </form>
        </div>
        <div class="footer"></div>
    </div>
</body>
</html>