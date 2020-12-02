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
	 <link href="./Themesfinity&#39;s CSS Button_files/bootstrap.min.css" rel="stylesheet">
     <link href="./Themesfinity&#39;s CSS Button_files/buttons.css" rel="stylesheet">
	 <link href="./Themesfinity&#39;s CSS Button_files/style..css" rel="stylesheet">
	 <link rel="stylesheet" href="styles.css">
  </head>	

  <body style="background-color:#42bd5e4d">
	   <!--header-->
	   <div class="header">
          <a href="admin1.html"> <img src="logo.jpg"> </a>
          <span><p style="font-size:30px;color: yellow;">GOKULDHAM COOPERATIVE HOUSING SOCIETY</p></span>
          <button class="btn btn-primary btn-xs" style="cursor: context-menu; font-size:15px;color: white;background-color:teal; margin-left: 150px;margin-top: 0px;font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;"><i class="fa fa-user"></i> Hello Atmaram Tukaram Bhide!</button>
          <a href="index.html" class="btn btn-danger btn-xs" style="background-color:#f14e4e; font-size:15px; float: right; margin-right: 30px;margin-top: 30px;"class="btn btn-primary btn-xs specialbuttonlabel"> <i class="fa fa-sign-out">Logout</i></a>
	  </div>
	  <div style="margin-top:150px; text-align: center;border: 2px outset black;margin-left:250px;margin-right:250px">
	     <div class="container" style="text-align:left;">
	     <a href="tenants.php" class="btn btn-success btn-sm btn-radius" style="background-color:white; margin-bottom:5px; margin-top:2px;align:left;"><i class="fa fa-reply"> Go Back</i></a><br><br>
		 <!--FORM-->
		 <form method="post" action="processt.php">
	         <div class="row">
                 <div class="col-25">
                     <b><label for="roomNo">Room No :</label></b>
				 </div>
		         <div class="col-75">
                     <input type="text" id="roomNo" name="userid" required >
                 </div>
			 </div>
			 <div class="row">
                 <div class="col-25">
					 <b> <label for="name">Name Of Tenant : </label></b>
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
                      <input type="text" id="phoneNo"  name="phone" maxlength="10" minlength="10" required >
                 </div>
			 </div>

			 <div class="row">
                 <div class="col-25">
                     <b><label for="no">No of people :</label></b>
                 </div>
                 <div class="col-75">
                     <input type="text" id="no" name="no" required >
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
                 <input type="submit" class="btn btn-outline-success btn-xs" name="save" value="Submit">
             </div>
		 </form>
     </div>
     </div>
  </body>
</html>