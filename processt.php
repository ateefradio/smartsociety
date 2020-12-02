<?php
include_once 'database.php';
if(isset($_POST['save']))
{	 
	 $name = $_POST['name'];
	 $userid = $_POST['userid'];
     $phone = $_POST['phone'];
     $resident = $_POST['resident'];
     $no = $_POST['no'];

	 $sql = "INSERT INTO tenants(userid,name,phone,no,resident) VALUES ('$userid','$name','$phone','$no','$resident')";
     
     if (mysqli_query($conn, $sql)) {
		echo "New record created successfully !";
		header("Location:tenants.php");
	 }
	  else {
		echo "Error: " . $sql . "
     " . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>
