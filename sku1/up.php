<?php

include 'dbh.php';
$msg="";
if(isset($_POST["log-btn"])){
  
  $id=$_GET['updateid'];
  $funame=$_POST['ud'];
  $fowner=$_POST['fun'];

  $sql ="UPDATE `furniture` SET `f_id`='$id',`funName`='$funame',`funOwnerName`='$fowner'  
  WHERE `f_id`=' $id' ";
  $query=mysqli_query($con,$sql);
  if($query){
      $msg= "update was successful";
   // header("location:view.php");
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
    <link rel="stylesheet" href="home.css">
   
    <title>UPDATING FURNITURE</title>
</head>
<body>
<?php include 'files.php';


 ?>
<form action="" method="POST" class="form">
    <table>
    <tr>
     <td><input type="text" name="ud" autocomplete="off" class="input-field" placeholder="insert furniture Name"></td>
     </tr>
     <tr>
     <td><input type="text" name="fun" class="input-field" placeholder="insert furniture Onwer Name"></td>
     </tr>
     <tr>
        <td> <button type="submit" name="log-btn" class="lg-btn">UPDATE</button></td>
        
     </tr>
    </table>
    <div class="msg">
        <h3><?php echo $msg ?></h3>
    </div>
    </form> 
</body>
</html>
<?php
//include 'update.php';
?>