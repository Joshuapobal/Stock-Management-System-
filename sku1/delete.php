
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="v.css">
    <title>Deleting furniture</title>
</head>
<body>
   <?php include 'files.php';
    include 'dbh.php';
   ?> 
   <table>
    <th name='id'>ID</th>
    <th name='fname'>Furniture Name</th>
    <th name='fowner'>Furniture Owner Name</th>
    <th>Action</th>
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
   <td><button><a href="del.php? deleteid='.$id.'">DELETE</a></button><td>
   
  
 </tr>';

  }
}

?>


</table>
</body>
</html>
