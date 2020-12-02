<?php
if(!isset($_SERVER['HTTP_REFERER'])){
  // redirect them to your desired location
  header('location:main.php');
  exit;
}
?>

<!DOCTYPE html>

<head>
  <title>ADMIN PAGE</title>

  <!--M E T A    T A G S-->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="keywords" content="footer, address, phone, icons" />

  <!-- LINKS-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="Astyle.css">
  <link href="/css/ladda-themeless.min.css" rel="stylesheet">
  <link rel="icon" href="images/logo.png" type="image/icon type">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
  <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
  <link href="./Themesfinity&#39;s CSS Button_files/bootstrap.min.css" rel="stylesheet">
  <link href="./Themesfinity&#39;s CSS Button_files/buttons.css" rel="stylesheet">
  <link href="./Themesfinity&#39;s CSS Button_files/style..css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script>
    function date_time(id) {
      date = new Date;
      year = date.getFullYear();
      month = date.getMonth();
      months = new Array('January', 'February', 'March', 'April', 'May', 'June', 'Jully', 'August', 'September', 'October', 'November', 'December');
      d = date.getDate();
      day = date.getDay();
      days = new Array('Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday');
      h = date.getHours();
      if (h < 10) {
        h = "0" + h;
      }
      m = date.getMinutes();
      if (m < 10) {
        m = "0" + m;
      }
      s = date.getSeconds();
      if (s < 10) {
        s = "0" + s;
      }
      result = '' + days[day] + ' ' + months[month] + ' ' + d + ' ' + year + ' ' + h + ':' + m + ':' + s;
      document.getElementById(id).innerHTML = result;
      setTimeout('date_time("' + id + '");', '1000');
      return true;
    }
    function openNav() {
      document.getElementById("myNav").style.width = "20%";
    }

    function closeNav() {
      document.getElementById("myNav").style.width = "0%";
    }
    $(document).ready(
    function(){
        $('input:file').change(
            function(){
                if ($(this).val()) {
                    $('input:submit').attr('disabled',false);
                    document.getElementById("sub1").style="cursor:pointer;"
                    document.getElementById("sub2").style="cursor:pointer;"
                    // or, as has been pointed out elsewhere:
                    // $('input:submit').removeAttr('disabled'); 
                } 
            }
            );
    });
  </script>

</head>

<body style="background-color: lightsalmon;">
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

  <div class="notice">
    <b>
    <marquee  id="marq">
      Welcome Admin! <span id="date_time"></span>
      <script type="text/javascript">window.onload = date_time('date_time');</script>
    </marquee></b>
  </div>
<!--main body-->
  <div class="row">
    <div class="leftcolumn">
      <div class="card" style="border: 3px outset black">
        <div>
          <mark style="border: 3px outset black">Upload Notice Here :</mark>
          <br><br><br></div>
        <div class="box1" style= "text-align: center;border: 3px solid brown;">
          <form action="notice.php" name="myForm" method="POST" enctype="multipart/form-data">
            <input class="input100" type="file" name="fileupload" accept=".pdf">
            <br><br>
            <input  type="submit" name="submit" id="sub1" style="margin-top: -20px; cursor: not-allowed;" class="btn btn-light btn-sm btn-radius" disabled >
          </form>
          <a href="table.php" id="button" style="margin-bottom: 10px; margin-top: 10px;"
            class="btn btn-light btn-sm btn-radius"> View </a>
        </div>

      </div>
      <div class="card" style="border: 3px outset black">
        <div>
          <mark style="border: 3px outset black">Add/Delete Member Details: </mark>
          <br><br><br></div>
        <div class="butt" style="margin-left: 70px;margin-right: 70px; text-align: center;border: 3px solid brown;">
          <a href="update.php" id="button" class="btn btn-light btn-sm btn-radius"
            class="btn btn-primary btn-xs specialbuttonlabel"> Update </a>
          <a href="tenants.php" id="button" class="btn btn-light btn-sm btn-radius"
            class="btn btn-primary btn-xs specialbuttonlabel"> Tenants </a>


        </div>



      </div>
    </div>
    <div class="rightcolumn">
    <div class="card" style="border: 3px outset black">
        <div>
          <mark style="border: 3px outset black">Upload Photos Here :</mark>
          <br><br><br></div>
        <div class="box1" style= "text-align: center;border: 3px solid brown;">
          <form name="frmImage" enctype="multipart/form-data" action="index1.php" method="post">
            <input class="input100" type="file" name="userImage" accept=".jpeg,.jpg,.png">
            <br><br>
            <input  type="submit" id="sub2" style="margin-top: -20px;cursor: not-allowed;" class="btn btn-light btn-sm btn-radius" class="frmImageUpload" disabled >
          </form>
          <a href="listImages.php" id="button" style="margin-bottom: 10px; margin-top: 10px;"
            class="btn btn-light btn-sm btn-radius"> View </a>
        </div>

      </div>

      <div class="card" style="border: 3px outset black">
        <div>
          <mark style="border: 3px outset black">View Collection of Funds : </mark>
          <br><br><br></div>
        <div class="butt" style="margin-left: 70px; margin-right: 70px; text-align: center;border: 3px solid brown;">
          <a href="https://dashboard.razorpay.com/#/access/signin" id="button" class="btn btn-light btn-sm btn-radius"
            class="btn btn-primary btn-xs specialbuttonlabel">Payment </a>
          <a href="complaint.php" id="button" class="btn btn-light btn-sm btn-radius"
            class="btn btn-primary btn-xs specialbuttonlabel">Complaints </a>
        </div>
      </div>

    </div>
  </div>
</body>

</html>