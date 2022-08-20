<?php

session_start();
unset($_SESSION['user_name']);
unset($_SESSION['pass_word']);

session_destroy();
header("location:index.php")

?>