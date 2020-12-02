
<?php

session_start();
if(isset($_POST['name'])){
$name=$_POST['name'] ;
$email=$_POST['email'] ;
$userid=$_POST['userid'] ;
$number=$_POST['number'] ;
$type=$_POST['type'] ;
$date=$_POST['date'];
$amount=$_POST['amount'] ;
$connect=mysqli_connect("localhost" , "root" , "" , "smartsociety");
$query = mysqli_query($connect,"insert into payment (userid,name,email,number,type,date,amount)
 values ('$userid','$name','$email','$number','$type','$date','$amount')"); 
if(!$query)
{
    echo '<script>alert("ERROR OCCURED TRY AGAIN")</script>';
	echo '<script>window.location="payment.php"</script>';
}
else{
  echo '<script>alert("PAYMENT SUCCESSFULL")</script>';
  echo '<script>window.location="Confirm.html"</script>';
  header("location: https://rzp.io/l/2vH4Sdoyw");
}
}
else{
  header("Location: http://localhost/smartsociety/index.php");
}

 /*
  <div class="razorpay-embed-btn" data-url="https://pages.razorpay.com/pl_G2FWCReR1V6tAI/view"
   data-text="Pay Now" data-color="#528FF0" data-size="large">
  <script>
  (function(){
    var d=document; var x=!d.getElementById('razorpay-embed-btn-js')
    if(x){ var s=d.createElement('script'); s.defer=!0;s.id='razorpay-embed-btn-js';
    s.src='https://cdn.razorpay.com/static/embed_btn/bundle.js';d.body.appendChild(s);} else{var rzp=window['__rzp__'];
    rzp && rzp.init && rzp.init()}})();
</script>
</div> */
  