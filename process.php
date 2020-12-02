<?php
include_once 'database.php';
if(isset($_POST['save']))
{	 
	 $name = $_POST['name'];
	 $userid = $_POST['userid'];
     $phone = $_POST['phone'];
     $resident = $_POST['resident'];
	 $email = $_POST['email'];
	 $dob = $_POST['dob'];
	 $no = $_POST['no'];
     $parking = $_POST['parking'];
	 $sql = "INSERT INTO members (userid,name,phone,email,dob,resident,no,parking)
	 VALUES ('$userid','$name','$phone','$email','$dob','$resident','$no','$parking')";
     
     if (mysqli_query($conn, $sql)) {
		echo "New record created successfully !";
		header("Location:update.php");
	 }
	  else {
		echo "Error: " . $sql . "
     " . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>
