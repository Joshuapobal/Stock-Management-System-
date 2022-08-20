<?php
include 'dbh.php';

if(isset($_POST["log-btn"])){

//$id =  $_POST["id"];    
$usname =  $_POST["uid"];
$pass = $_POST["pwd"];

$query = "INSERT INTO `manager`(`username`, `password`) VALUES ('$usname','$pass')";
$result=mysqli_query($con,$query);
//$check=mysqli_num_rows($result);

if($result){
  /*  while($row =mysqli_fetch_array($result)){
        header("location:index.php");
    }*/
    header("location:index.php");
}else{
    die(mysqli_error($con));  
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
    <title>sign up page</title>
</head>
<body>

<form action="" method="POST" class="form">
    <table>
    <tr>
     <td><input type="text" name="uid" autocomplete="off" class="input-field" placeholder="insert username"></td>
     </tr>
     <tr>
     <td><input type="password" name="pwd" class="input-field" placeholder="insert password"></td>
     </tr>
     <tr>
        <td> <button type="submit" name="log-btn" class="lg-btn">sign up</button></td>
        
     </tr>
    </table>
    </form> 
</body>
</html>