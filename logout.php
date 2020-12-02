<?php
include 'login.php';
include 'database.php';
date_default_timezone_set('Asia/Kolkata');
$logout_date = date("Y-m-d");
$logout_time = date("H:i:s");
$kyurie = "update login_details set logout_time= '$logout_time' and logout_date = '$logout_date'";
$store=mysqli_query($conn , $kyurie);
header('location:index.php');
?>