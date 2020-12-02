<?php   
include 'database.php';
 $sql = "SELECT * FROM infopdf order by fileid desc ";  
 $result = mysqli_query($conn, $sql);  
 $query="select *from output_images";
 $result1 = mysqli_query($conn, $query);  
 ?>
<!DOCTYPE html>
<title>SMART SOCIETY</title>


<!--M E T A    T A G S-->
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- LINKS-->
<link href="./Themesfinity&#39;s CSS Button_files/buttons.css" rel="stylesheet">
<link rel="stylesheet" href="main.css">
<link rel="icon" href="images/logo.png" type="image/icon type">
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<link href='https://fonts.googleapis.com/css?family=Bevan' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Aladin' rel='stylesheet'>
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD1_ZZdNOXtuTYg9R4N77X_r6CzIIO94NM&callback=initMap&libraries=&v=weekly"
      defer></script>
      <script src="index.js"></script>
      <script>
        function myFunction() {
      var x = document.getElementById("myTopnav");
      if (x.className === "topnav") {
        x.className += " responsive";
      } else {
        x.className = "topnav";
      }
    }
      </script>
</head>



<body>
<!--Nav Bar-->
<div id="mynav">
<div class="topnav" id="myTopnav">
<img onclick="window.location.reload()" src="images/logo.png" alt="logo" width="100" height="80" style="cursor: pointer;">
<a href="payments.html">PAYMENTS</a>
<a href="complaints.html" id="myBtn">COMPLAINTS</a>
<a href="memdetails1.php" id="mem">MEMBER DETAILS</a>
<a href="facilities.html">FACILITIES</a></li>
<a href="index.php">ABOUT</a>

  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>
</div>


  <!--TOP BOX -->
  <div class="top-container" style="margin-top: 180px;">

  
<div class="row">
  <div class="column left" >

  <div id="notice-box" class="notice-box">
      <div style="border: 3px solid green; background-color: lightgoldenrodyellow;">
        <h2 style=" color: green; font-family: Georgia, 'Times New Roman', Times, serif; " class="glow"><i
            class="fa fa-bullhorn "></i>Notice </h2>
      </div>

      <marquee behavior="scroll" direction="down" scrollamount="3" style="text-align: center; font-size:20px;">
        <?php  
                     if(mysqli_num_rows($result) > 0)  
                     {  
                          while($row = mysqli_fetch_array($result))  
                          {  
                               echo '<label><a href="'.$row['directory1'].'" target="_blank">'.$row['filename'].'</a><br></label>';  
                          }  
                     }  
                ?>
      </marquee>
    </div>

  </div>

  <div class="column middle">
     <!--slideshow-->
 <div class="slideshow-container">
      <div class="slideshow_wrapper">
        <div class="slideshow">
       
            <?php
            while($row = mysqli_fetch_array($result1)) {
            ?>
           <div class="slide_one slide">
            <img src="imageView.php?image_id=<?php echo $row["imageId"]; ?>"/>
            </div>

          <?php } ?>
        </div>
      </div>
    </div>

  </div>

  <div class="column right">
              
  <div class="form-popup" id="myForm">
      <form action="login.php" class="form-container" method="POST">
        <h1
          style="font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;">
          ADMIN LOGIN</h1>

        <label for=" email"><b><i class="fas fa-user"></i>USERNAME: &nbsp;</b></label>
        <input type="text" placeholder="Enter Username.." name="username" required>

        <br> <label for="psw"><b><i class="fas fa-lock"></i>PASSWORD: &nbsp;</b></label>
        <input type="password" placeholder="Enter Password" name="password" required>

        <button type="submit" value="submit" class="btn btn-success btn-xs btn-radius">Login</button>

      </form>
    </div>            

  </div>

</div>
    
  </div>

  
  <!--main page contents-->

  <div class="welcome">
    <h1>WELCOME TO GOKULDHAM SOCIETY</h1>
  </div>

<!--image gallery-->
  <div class="row1"> 
  <div class="column1">
    <img src="images/ss1.jpg" style="width:100%">
    <img src="images/pool.jpg" style="width:100%; height: 270px;">
    
  </div>
  <div class="column1">
    <img src="images/ss3.jpg" style="width:100%">
    <img src="images/ss4.jpg" style="width:100%">
   
  </div>  
  <div class="column1">
    <img src="images/ss2.jpg" style="width:100%; height: 230px;">
    <img src="images/play.jpg" style="width:100%">
    
  </div>
 
</div>







 
  <!--text text-->


  <div class="text">
    <img src="images/society.jpg"
      style="float: right; height: 300px; width:350px; border: 3px solid black; margin: 3px;">
    <h1 style="margin-left:15px; color: green;">About</h1>
    <p>
      <br> A society is a group of individuals involved in persistent social interaction, or a large social group
      sharing
      the same spatial or social territory, typically subject to the same political authority and dominant
      cultural
      expectations. Societies are characterized by patterns of relationships (social relations) between
      individuals
      who share a distinctive culture and institutions; a given society may be described as the sum total of
      such
      relationships among its constituent of members. In the social sciences, a larger society often exhibits
      stratification or dominance patterns in subgroups.


      More broadly, and especially within structuralist thought, a society may be illustrated as an economic,
      social,
      industrial or cultural infrastructure, made up of, yet distinct from, a varied collection of
      individuals. In
      this regard society can mean the objective relationships people have with the material world and with
      other
      people, rather than "other people" beyond the individual and their familiar social environment.
      A society is a group of individuals involved in persistent social interaction, or a large social group
      sharing
      the same spatial or social territory, typically subject to the same political authority and dominant
      cultural
      expectations. Societies are characterized by patterns of relationships (social relations) between
      individuals
      who share a distinctive culture and institutions; a given society may be described as the sum total of
      such
      relationships among its constituent of members. In the social sciences, a larger society often exhibits
      stratification or dominance patterns in subgroups.


      More broadly, and especially within structuralist thought, a society may be illustrated as an economic,
      social,
      industrial or cultural infrastructure, made up of, yet distinct from, a varied collection of
      individuals. In
      this regard society can mean the objective relationships people have with the material world and with
      other
      people, rather than "other people" beyond the individual and their familiar social environment.
    </p>

  </div>



  <div class="text1">
    <div class="pic">
    <img src="images/plan.jpg" style="float: right; height: 400px; width:350px;border: 3px solid black; margin: 3px;"></div>
    <h2 style="margin-left:15px; color: green ;">FLOOR PLAN</h2>
    <p>
      <br> A society is a group of individuals involved in persistent social interaction, or a large social group
      sharing
      the same spatial or social territory, typically subject to the same political authority and dominant
      cultural
      expectations. Societies are characterized by patterns of relationships (social relations) between
      individuals
      who share a distinctive culture and institutions; a given society may be described as the sum total of
      such
      relationships among its constituent of members. In the social sciences, a larger society often exhibits
      stratification or dominance patterns in subgroups.


      More broadly, and especially within structuralist thought, a society may be illustrated as an economic,
      social,
      industrial or cultural infrastructure, made up of, yet distinct from, a varied collection of
      individuals. In
      this regard society can mean the objective relationships people have with the material world and with
      other
      people, rather than "other people" beyond the individual and their familiar social environment.
      A society is a group of individuals involved in persistent social interaction, or a large social group
      sharing
      the same spatial or social territory, typically subject to the same political authority and dominant
      cultural
      expectations. Societies are characterized by patterns of relationships (social relations) between
      individuals
      who share a distinctive culture and institutions; a given society may be described as the sum total of
      such
      relationships among its constituent of members. In the social sciences, a larger society often exhibits
      stratification or dominance patterns in subgroups.


      More broadly, and especially within structuralist thought, a society may be illustrated as an economic,
      social,
      industrial or cultural infrastructure, made up of, yet distinct from, a varied collection of
      individuals. In
      this regard society can mean the objective relationships people have with the material world and with
      other
      people, rather than "other people" beyond the individual and their familiar social environment.
    </p>

  </div>


  <!--FOOTER-->


  <footer class="footer-distributed">
  
    <div class="footer-left" >

      <h3>Gokuldham &nbsp;<span>Society</span></h3>

      <p class="footer-links">
      <a href="index.php" class="link-1">About</a>

      <a href="facilities.html">Facilities</a>

      <a href="memdetails1.php">Members</a>

      <a href="complaints.html">Complaints</a>

     
      <a href="payments.html">Payments</a>


      </p>

      <p class="footer-company-name">Gokuldham scoiety © 2020</p>
    </div>

    <div class="footer-center">

      <div>
        <i class="fa fa-map-marker"></i>
       <a href="https://www.google.com/maps/place/Gokuldham+Society,+Satya+Nagar,+Sathi+D+Souza+Nagar,+Saki+Naka,+Mumbai,+Maharashtra+400072/@19.0998496,72.8850761,17z/data=!4m5!3m4!1s0x3be7c8702918b84f:0x2677f9d7454c6342!8m2!3d19.0998915!4d72.8873084"> <p>Film City Complex, Aarey Colony,<span>Goregaon, Mumbai, Maharashtra 400065</span></p></a>
      </div>

      <div>
        <i class="fa fa-phone"></i>
        <p> 022 2345678</p>
      </div>

      <div>
        <i class="fa fa-envelope"></i>
        <p><a href="mailto:support@company.com">info.gokuldhamsociety.com</a></p>
      </div>

    </div>

    <div class="footer-right">
    <div id="map" class="map">
    </div>
    </div>

  </footer>



</body>

</html>