<!DOCTYPE html>
<html>
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
 <head>   
    <!--M E T A    T A G S-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <meta name="keywords" content="footer, address, phone, icons" />
 
     <!-- LINKS-->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <link rel="stylesheet" href="style.css">
     <link rel="stylesheet" href="Astyle.css">
     <link href="/css/ladda-themeless.min.css" rel="stylesheet">
     <link rel="icon" href="logo.png" type="image/icon type">
     <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
     <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
     <link href="./Themesfinity&#39;s CSS Button_files/bootstrap.min.css" rel="stylesheet">
     <link href="./Themesfinity&#39;s CSS Button_files/buttons.css" rel="stylesheet">
     <link href="./Themesfinity&#39;s CSS Button_files/style..css" rel="stylesheet">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
     <title> View Notice</title>

         
 </head>
 <body> 
     <!--header-->
     <div class="header">
     <a href="admin1.php" class="logo"> <img src="images/logo.png"> </a>

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

<a href="table.php" class="btn btn-danger btn-sm btn-radius" style="background-color:white; margin-bottom:5px; margin-top:30px;align:left;"><i class="fa fa-reply"> Go Back</i></a>
<?php
// Database Connection 
include 'database.php';
//Check for connection error
$fileid=@$_GET['fileid'];
$select = "SELECT * FROM `infopdf` where fileid ='$fileid'";
$result = $conn->query($select);

while($row = $result->fetch_object()){
  $pdf = $row->filename;
  $path = $row->directory;
}
?>
<br/><br/>
<div style="height: 591px;">
<iframe src="<?php echo $path.$pdf; ?>" width="100%" height="100%">
</iframe>
</div>
</body>
</html>