<?php
include_once 'database.php';
$result = mysqli_query($conn,"SELECT * FROM tenants ORDER BY userid ASC");
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
     <title>Update Data - Tenants</title>
</head>
<body> 
    <!--header-->
    <div class="header" style=" width: auto;">
    <a href="admin1.php" class="logo"> <img src="logo.jpg"> </a>

    <span>
     <b><p style="font-size:30px;color:yellow; font: outline; font-family: Georgia, 'Times New Roman', Times, serif; margin-left: 30px;" >GOKULDHAM COOPERATIVE HOUSING SOCIETY</p></b> 
    </span>
    <button id="button1" class="btn btn-primary btn-xs"
      style="cursor:context-menu; font-size:15px;color: white;background-color:teal;float: right; margin-left: 150px;margin-top: 5px; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;"><i
        class="fa fa-user"></i> Hello Atmaram Tukaram Bhide!</button>
    <a href="logout.php" class="btn btn-danger btn-xs"
      style="background-color:#f14e4e; font-size:15px; float: right;margin-right: -315px; margin-top: 65px;color: white;"
      class="btn btn-primary btn-xs specialbuttonlabel"> <i class="fa fa-sign-out">Logout</i></a>

  </div>
	 <div style="margin-top: 10%;border: 2px outset black;">
    
     <a href="admin1.php" class="btn btn-danger btn-sm btn-radius" style="background-color:white; margin-bottom:5px; margin-top:2px;align:left;"><i class="fa fa-reply"> Go Back</i></a><br><br>
     <a href="insertt.php" class="btn btn-danger btn-sm btn-radius" style="background-color:white; margin-top: -67px; float: right;"><i class="fa fa-user-plus"></i></a><br><br>
     <div style="overflow-x:auto; margin-top:-55px;margin-bottom: 5px;margin-left: 5%;margin-right: 5%;">
     <table>
         <tr>
             <td>Room No</td>
             <td>Name</td>
             <td>Phone No</td>
             <td>Number of people</td>
             <td>Contract Year</td>
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
                 <td><?php echo $row["no"]; ?></td>
                 <td><?php echo $row["resident"]; ?></td>
                 <td><a href="update-processt.php?userid=<?php echo $row["userid"]; ?>"  class ="btn btn-danger btn-xs" style="background-color:white;">Update</a></button></td>
                 <td><a href="delete-processt.php?userid=<?php echo $row["userid"]; ?>"  class ="btn btn-danger btn-xs" style="background-color:white;">Delete</a></button></td>
</tr>
<?php
$i++;
}
?>
</table>
</div>
</body>
</html>