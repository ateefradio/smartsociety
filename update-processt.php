<?php
  include_once 'database.php';
  if(count($_POST)>0) {
     mysqli_query($conn,"UPDATE tenants set userid='" . $_POST['userid'] . "', name='" . $_POST['name'] . "', phone='" . $_POST['phone'] . "' ,resident='" . $_POST['resident'] . "' WHERE userid='" . $_POST['userid'] . "'");
     $message = "Record Modified Successfully";
   }
 $result = mysqli_query($conn,"SELECT * FROM tenants WHERE userid='" . $_GET['userid'] . "'ORDER BY userid ASC"); 
 $row= mysqli_fetch_array($result);
?>
<html>
 <head>
     <title>Update Data</title>
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
     <div style="margin-top:150px; text-align: center;border: 2px outset black;margin-left:250px;margin-right:250px">
     <a href="tenants.php" class="btn btn-danger btn-sm btn-radius" style="background-color:white; margin-bottom:5px; margin-top:2px;align:left;"><i class="fa fa-reply"> Go Back</i></a><br><br>
         <form name="frmUser" method="post" action="">
             <div><?php if(isset($message)) { echo $message; } ?> </div>
             <div style="padding-bottom:5px;">
                 <a href="tenants.php">Member List</a>
             </div>
             Room NO : <br>
             <input type="hidden" name="userid" class="txtField" value="<?php echo $row['userid']; ?>">
             <input type="text" name="userid"  value="<?php echo $row['userid']; ?>">
             <br>
             Name of Tenant: <br>
             <input type="text" name="name" class="txtField" value="<?php echo $row['name']; ?>">
             <br>
             Phone No :<br>
             <input type="text" name="phone" class="txtField" value="<?php echo $row['phone']; ?>">
             <br>
             Parking Lot :<br>
             <input type="text" name="no" class="txtField" value="<?php echo $row['no']; ?>">
             <br>
             Residing Year :<br>
             <input type="text" name="resident" class="txtField" value="<?php echo $row['resident']; ?>">
             <br>
             <input type="submit" name="submit" value="Submit" class="btn btn-outline-danger" style="margin-right: 561px;margin-bottom: 15px;">
         </form>
     </div>
     </div>
  </body>
</html>