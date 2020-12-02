<!DOCTYPE html>
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
 <head>   
     <!--M E T A    T A G S-->
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="">
	  <meta name="author" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      
     <!-- L I N K S-->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	 <link rel="stylesheet" href="style.css">
     <link rel="stylesheet" href="styles.css">
     <link rel="stylesheet" href="Astyle.css">
	 <link href="./Themesfinity&#39;s CSS Button_files/bootstrap.min.css" rel="stylesheet">
     <link href="./Themesfinity&#39;s CSS Button_files/buttons.css" rel="stylesheet">
     <link href="./Themesfinity&#39;s CSS Button_files/style..css" rel="stylesheet">
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
	 
      <div style="margin-top: 15%;text-align: center;border: 2px outset black;margin-left:250px;margin-right:250px;margin-bottom: 1%;">
	     <div class="container" style="text-align:left;">
	         <a href="admin1.php" class="btn btn-danger btn-sm btn-radius" style="background-color:white; margin-bottom:5px; margin-top:25px;align:left;"><i class="fa fa-reply"> Go Back</i></a><br><br>
             
             <!--FORM-->
			 <form method="post" action="process.php"> 
			     <div class="row">
                     <div class="col-25">
                         <b><label for="roomNo">Room No :</label></b>
                     </div>
                     <div class="col-75">
                         <input type="text" id="roomNo" name="userid" placeholder="1-A" pattern="[1-9]{1}-[A-Z]{1}" required >
                     </div>
			     </div>
			  
		         <div class="row">
                      <div class="col-25">
                         <b> <label for="name">Name :</label></b>
                      </div>
                     <div class="col-75">
                         <input type="text" id="name"  name="name" required >
                     </div>
				 </div>
				 
	             <div class="row">
                     <div class="col-25">
                          <b><label for="phoneNo">Phone No :</label></b>
                     </div>
                     <div class="col-75">
                         <input type="text" id="phoneNo"  name="phone"  pattern="[0-9]{10}" required >
                     </div>
                 </div>

	             <div class="row">
                     <div class="col-25">
                         <b><label for="email">Email Id :</label></b>
                     </div>
                     <div class="col-75">
                         <input type="email" id="email" name="email" required >
                     </div>
                 </div>

                 <div class="row">
                     <div class="col-25">
                         <b><label for="dob">Date of Birth :</label></b>
                     </div>
                     <div class="col-75">
                         <input type="date" id="dob" name="dob" required >
                     </div>
                 </div>
	
	             <div class="row">
                     <div class="col-25">
                         <b><label for="resident">Residing Year :</label></b>
                     </div>
                     <div class="col-75">
                         <input type="number" id="resident" name="resident" required >
                     </div>
                 </div>

                 <div class="row">
                     <div class="col-25">
                         <b><label for="no">No of residence :</label></b>
                     </div>
                     <div class="col-75">
                         <input type="number" id="no" name="no" required >
                     </div>
                 </div>
	
                 <div class="row">
                     <div class="col-25">
                         <b><label for="parking">Parking Slot :</label></b>
                     </div>
                     <div class="col-75">
                         <input type="text" id="parking" name="parking" required >
                     </div>
                 </div>
	
                 <div class="row">
                     <input type="submit" class="btn btn-outline-danger btn-xs" name="save" value="Submit">
                 </div>
	         </form>
         </div>
     </div>
 </body>
</html>