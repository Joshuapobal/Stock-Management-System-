<?php
include 'dbh.php';
if(isset($_GET['deleteid'])){
    $id = $_GET['deleteid'];
    $sql=mysqli_query($con, "delete from furniture where f_id=$id");

    if($sql){
        header("location:delete.php");
        echo "Delete was successful";
    }else{
        die(mysqli_error($con));
    }
}
?>