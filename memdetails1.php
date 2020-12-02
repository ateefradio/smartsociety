

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
</head>
<script> 
 var user1="admin";
var username=prompt('Please Log in. Username:',' ');
if (username==user1){
   var pass1="admin";
   password=prompt('If you are suppose to be here you have a password. Please type    it now:',' ');
    if (password==pass1){
        alert("Welcome!")
     }
    else {
        window.location="index.php";
    }
}
else {
  window.location="index.php";
}
  </script>
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



<body style="overflow-x: hidden;" >
 
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


<h2 style="text-align: center; font-family:cursive;font-size:20px; color:green; margin-top:150px;">MEMBER DETAILS</h2>

<form action=""> 
    
  <select name="users" onchange="showUser(this.value)" style="padding: 10px; border:3px solid green;align:center;">
    <option value="">Select Room Number:</option>
    <option value="1-A">1-A</option>
    <option value="1-B ">1-B</option>
    <option value="1-C">1-C</option>
    <option value="1-D">1-D</option>
    <option value="1-E">1-E</option>
    <option value="1-F ">1-F</option>
    <option value="1-G">1-G</option>
    <option value="1-H">1-H</option>
    <option value="1-I ">1-I</option>
    <option value="1-J">1-J</option>
    <option value="1-K">1-K</option>
  </select>
</form>
<br>
<div id="txtHint">Residents Info will be listed here...</div>

<script>
function showUser(str) {
  if (str == "") {
    document.getElementById("txtHint").innerHTML = "";
    return;
  } else {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("txtHint").innerHTML = this.responseText;
      }
    };
    xmlhttp.open("GET","ajax.php?q="+str,true);
    xmlhttp.send();
  }
}
</script>

<h2 style="text-align: center; font-family:cursive;font-size:20px; color:green; margin-top:100px;">TENANTS DETAILS</h2>

<form action=""> 
    
  <select name="users" onchange="showUser1(this.value)" style="padding: 10px; border:3px solid green;align:center;">
    <option value="">Select Room Number:</option>
    <option value="2-A">2-A</option>
    <option value="2-B ">2-B</option>
    <option value="2-C">2-C</option>
   
  </select>
</form>
<br>
<div id="txtHint1">Residents Info will be listed here...</div>

<script>
function showUser1(str) {
  if (str == "") {
    document.getElementById("txtHint1").innerHTML = "";
    return;
  } else {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("txtHint1").innerHTML = this.responseText;
      }
    };
    xmlhttp.open("GET","ajax1.php?s="+str,true);
    xmlhttp.send();
  }
}
</script>












<!--FOOTER-->


<footer class="footer-distributed">

<div class="footer-left">

  <h3>GOKULDHAM<span>Society</span></h3>

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


</footer>
</body>

</html>

  
</body>
</html>
