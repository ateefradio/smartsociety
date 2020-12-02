<?php
  include_once 'database.php';
  if(count($_POST)>0) {
     mysqli_query($conn,"UPDATE members set userid='" . $_POST['userid'] . "', name='" . $_POST['name'] . "', phone='" . $_POST['phone'] . "', email='" . $_POST['email'] . "' ,dob='" . $_POST['dob'] . "' ,resident='" . $_POST['resident'] . "', no='" . $_POST['no'] . "',parking='" . $_POST['parking'] . "' WHERE userid='" . $_POST['userid'] . "'");
     $message = "Record Modified Successfully";
   }
 $result = mysqli_query($conn,"SELECT * FROM members WHERE userid='" . $_GET['userid'] . "'ORDER BY userid ASC"); 
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
     <script type = "text/javascript">

function validateEmail() {
   var emailID = document.myForm.EMail.value;
   atpos = emailID.indexOf("@");
   dotpos = emailID.lastIndexOf(".");
   
   if (atpos < 1 || ( dotpos - atpos < 2 )) {
      alert("Please enter correct email ID")
      document.myForm.EMail.focus() ;
      return false;
   }
   return( true );
}

</script>
 </head>
 <body>
     <!--header-->
     <div class="header">
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
     <div style="margin-top: 10%;text-align: center;border: 2px outset black;margin-left:250px;margin-bottom: 2%;margin-right:250px;">
     <a href="update.php" class="btn btn-danger btn-sm btn-radius" style="background-color:white;margin-bottom:5px;margin-top:2px;align:left;float: left;"><i class="fa fa-reply"> Go Back</i></a><br><br>
         <form name="frmUser" method="post" action="">
             <div><?php if(isset($message)) { echo $message; } ?> </div>
             <div style="padding-bottom:5px;">
                 <a href="update.php">Member List</a>
             </div>
             Room NO : <br>
             <input type="hidden" name="userid" class="txtField" value="<?php echo $row['userid']; ?>">
             <input type="text" name="userid"  value="<?php echo $row['userid']; ?>">
             <br>
             Name: <br>
             <input type="text" name="name" class="txtField" value="<?php echo $row['name']; ?>">
             <br>
             Phone No :<br>
             <input type="text" name="phone" class="txtField" value="<?php echo $row['phone']; ?>">
             <br>
             Email ID :<br>
             <input type="text" name="email" class="txtField" value="<?php echo $row['email']; ?>">
             <br>
             Date Of Birth :<br>
             <input type="date" name="dob" class="txtField" value="<?php echo $row['dob']; ?>">
             <br>
              Residing Year :<br>
             <input type="text" name="resident" class="txtField" value="<?php echo $row['resident']; ?>">
             <br>
             No of Residence :<br>
             <input type="number" name="no" class="txtField" value="<?php echo $row['no']; ?>">
             <br>
             Parking Lot :<br>
             <input type="text" name="parking" class="txtField" value="<?php echo $row['parking']; ?>">
             <br>
             <input type="submit" name="submit" value="Submit" class="btn btn-outline-danger" style="margin-left: 1%;margin-bottom: 2%;">
         </form>
     </div>
     </div>
  </body>
</html>