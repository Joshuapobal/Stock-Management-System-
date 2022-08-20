<?php
include 'dbh.php';
if(isset($_POST["log-btn"])){


    $usname= $_POST["ud"];
    $pas= $_POST["fun"];

    $sql = "INSERT INTO `furniture`( `funName`, `funOwnerName`) VALUES ('$usname','$pas')";
    $query = mysqli_query($con,$sql);
    //$check = mysqli_num_rows($sql);

    if($query){
     echo "Successfully inserted";
    }
}




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="home.css">
    <title>Inserting new furniture</title>
</head>
<body>
<?php include 'files.php' ?>
<form action="" method="POST" class="form">
    <table>
    <tr>
     <td><input type="text" name="ud" autocomplete="off" class="input-field" placeholder="insert furniture Name"></td>
     </tr>
     <tr>
     <td><input type="text" name="fun" class="input-field" placeholder="insert furniture Onwer Name"></td>
     </tr>
     <tr>
        <td> <button type="submit" name="log-btn" class="lg-btn">insert</button></td>
        
     </tr>
    </table>
    </form>  
</body>
</html>