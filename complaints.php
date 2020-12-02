<?php
if(isset($_POST['name'])){
$name=$_POST['name'];
$email=$_POST['email'];
$userid=$_POST['userid'];
$complaint=$_POST['complaint'];
date_default_timezone_set('Asia/Kolkata');
$date = date("Y-m-d");
include 'database.php';
$query = mysqli_query($conn,"insert into complaints (userid , name , email , complaint,date) values ('$userid' , '$name' , '$email' , '$complaint','$date')" );
if(!$query)
{
    echo '<script>alert("ERROR OCCURED TRY AGAIN")</script>';
	echo '<script>window.location="main.php"</script>';
}
else{
    echo '<script>alert("COMPLAINT REGISTERED")</script>';
	echo '<script>window.location="main.php"</script>';
}
}
else{
    header("Location: http://localhost/smartsociety/main.php");
}
?>
