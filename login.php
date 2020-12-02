<?php


//$host = gethostbyaddr($_SERVER["REMOTE_ADDR"]);
$machineName = gethostname();   //for get current system name 
$ip = gethostbyname($machineName); //For get ipaddress
include 'database.php';
if(isset($_POST['username'])){
$username = $_POST['username'];
$password = $_POST['password'];
$sql="select * from login where username='$username' && password='$password'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);
if ($row['username'] == $username && $row['password'] == $password)
    
{
    echo'<script type="text/javascript">alert("Login successful!!  Welcome");</script>';
    echo '<script> location.href = "admin1.php"; </script> ';
}
else{
    echo'<script type="text/javascript">alert("check your login credentials");</script>';
    echo '<script> location.href = "index.php"; </script> ';

}

date_default_timezone_set('Asia/Kolkata');
$login_date = date("Y-m-d");
$login_time = date("H:i:s");
$kyurie = "insert into login_details ( username , login_date , login_time, ip ) VALUES ('$username' , '$login_date' , '$login_time' , '$ip')";
$store=mysqli_query($conn , $kyurie);

}


?>

