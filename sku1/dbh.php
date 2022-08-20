<?php

$con= mysqli_connect("localhost","root","","skul_pro1");

if(!$con){
    die(mysqli_error($con));
}