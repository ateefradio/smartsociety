<?php
include_once 'database.php';
$result = mysqli_query($conn,"SELECT * FROM members ORDER BY userid ASC");
?>
<!DOCTYPE html>
<html>
<head>
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
 <head>   
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="">
      <meta name="author" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1">

     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <link rel="stylesheet" href="style.css">
     <link rel="stylesheet" href="Astyle.css">
	 <link href="./Themesfinity&#39;s CSS Button_files/bootstrap.min.css" rel="stylesheet">
     <link href="./Themesfinity&#39;s CSS Button_files/buttons.css" rel="stylesheet">
     <link href="./Themesfinity&#39;s CSS Button_files/style..css" rel="stylesheet">
     <link rel="icon" href="logo.png" type="image/icon type">
     <title>Update Data</title>
    

</head>
<body> 
    <!--header-->
    <div class="header" style=" width: auto;">
    <a href="admin1.php" class="logo"> <img src="logo.jpg"> </a>
    <span><b><p style="font-size:30px;color:yellow; font: outline; font-family: Georgia, 'Times New Roman', Times, serif; margin-left: 30px;" >GOKULDHAM COOPERATIVE HOUSING SOCIETY</p></b> 
    </span>
    <button id="button1" class="btn btn-primary btn-xs"
      style="cursor:context-menu; font-size:15px;color: white;background-color:teal;float: right; margin-left: 150px;margin-top: 5px; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;"><i
        class="fa fa-user"></i> Hello Atmaram Tukaram Bhide!</button>
    <a href="logout.php" class="btn btn-danger btn-xs"
      style="background-color:#f14e4e; font-size:15px; float: right;margin-right: -315px; margin-top: 65px;color: white;"
      class="btn btn-primary btn-xs specialbuttonlabel"> <i class="fa fa-sign-out">Logout</i></a>

  </div>
     <div style="margin-top: 10%; border: 2px outset black;">
    
    <a href="admin1.php" class="btn btn-danger btn-sm btn-radius" style="background-color:white;margin-top: 1%;align:left;"><i class="fa fa-reply"> Go Back</i></a><br><br>
    <a href="insert.php" class="btn btn-danger btn-sm btn-radius" style="background-color:white; margin-top: -63px;float: right;margin-right: 70px;"><i class="fa fa-user-plus"></i></a><br><br>
    <a href="defaultermail.php" class="btn btn-danger btn-sm btn-radius" style="background-color:white; margin-top: -111px; float: right;"><i style="font-size:15px;" class="fa fa-envelope-square"></i></a><br><br>
    
    
    <div style="overflow-x:auto; margin-top:-55px;margin-bottom: 5%;margin-left: 5%;margin-right: 5%;">
     <table style="border: 2px outset black;">
         <tr style="border: 2px outset black;">
             <td>Room No</td>
             <td>Name</td>
             <td>Phone No</td>
             <td>Email id</td>
             <td>DOB</td>
             <td>Residing Year</td>
             <td>No of Residence</td>
             <td>Parking Slot</td>
             <td>Action</td>
             <td>Action </td>
         </tr>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
if($i%2==0)
$classname="even";
else
$classname="odd";
?>
<tr class="<?php if(isset($classname)) echo $classname;?>">
<td><?php echo $row["userid"]; ?></td>
<td><?php echo $row["name"]; ?></td>
                 <td><?php echo $row["phone"]; ?></td>
                 <td><?php echo $row["email"]; ?></td>
                 <td><?php echo $row["dob"]; ?></td>
                 <td><?php echo $row["resident"]; ?></td>
                 <td><?php echo $row["no"]; ?></td>
                 <td><?php echo $row["parking"]; ?></td>
                 <td><a href="update-process.php?userid=<?php echo $row["userid"]; ?>"  class ="btn btn-danger btn-xs">Update</a></td>
                 <td><a href="delete-process.php?userid=<?php echo $row["userid"]; ?>" onclick="myFunction()" class ="btn btn-danger btn-xs">Delete</a></td></tr>
<?php
$i++;
}
?>
</table>
</div>
</body>
</html>