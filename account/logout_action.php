<?php

session_start();
$msg = "You have successfully logged out";
header("location:../login.php?msg=".$msg);
session_destroy();

?>