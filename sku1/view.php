<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="v.css">
    
    <title>Viewing furniture</title>
</head>
<body>
<?php

 /*
 include 'files/banner.php'    

 */ 
?>
<?php
include 'files.php';
include 'dbh.php';
?>


<table>
  <tr>
    <th>ID</th>
    <th>Furniture Name</th>
    <th>Furniture Owner Name</th>
    
  </tr>
  <?php


$sql="SELECT * FROM `furniture`";
$query =mysqli_query($con,$sql);

if($query){
  while($row=mysqli_fetch_array($query)){

    
    
    $id=$row["f_id"];
    $fname=$row["funName"];
    $fowner=$row["funOwnerName"];
    
    echo ' <tr>
    <td>'.$id.'</td>
   <td>'.$fname.'</td>
   <td>'. $fowner.'</td>
   
 </tr>';

  }
}

?>
</table> 
</body>
</html>