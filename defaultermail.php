<?php
if(!isset($_SERVER['HTTP_REFERER'])){
  // redirect them to your desired location
  header('location:main.php');
  exit;
}
?>

<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require 'vendor/autoload.php';

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'ateef.radiowalla@gmail.com';                     // SMTP username
    $mail->Password   = 'mateefradio123';                               // SMTP password
    $mail->SMTPSecure = "tls";     // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

     //Recipients
     $mail->setFrom('from@example.com', 'info.gokuldhamsociety@gmail.com');
  // $mail->addAddress('ateef.radiowalla@gmail.com', 'Ateef Radiowalla');



  $connection = mysqli_connect("localhost", "id15549943_aks", "Aks#372936aks") or die("Error".mysqli_error());

  //select MySQLi dabatase table
  $db = mysqli_select_db($connection, "id15549943_smartsociety") or die("Error".mysqli_error());

  $sql = mysqli_query($connection, "SELECT email from members");

  while ($row=mysqli_fetch_array($sql)) {
    $to[] = $row['email'];
  }
  foreach($to as $email) {
    $mail->addAddress($email);
  }





  // Add a recipient
  // $mail->addAddress('ellen@example.com');               // Name is optional
  // $mail->addReplyTo('info@example.com', 'Information');
  // $mail->addCC('cc@example.com');
  //  $mail->addBCC('bcc@example.com');

  // Attachments
  //$mail->addAttachment('notice.pdf'); // Add attachments
  // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
  $date = date("d-m-Y");
  $month=date("F",$date);
   $year=date("Y",$date);
   $link="localhost/smartsociety/complaints.html";
  // Content
  $mail->isHTML(true); // Set email format to HTML
  $mail->Subject = 'MAINTAINANCE PAYMENT REMINDER';
  $mail->Body = 'Hello Member, This is a gentle reminder to pay your maintainance outstanding amount for the month of '.$month.'. Kindly ignore if payed.
  For any queries and griviences  <a href="$link">click here</a>
  This is an auto generated email. Please do not reply.';
  //$mail->AltBody = 'Hello,Please find the below attached latest notice.Meeting on saturday, please attend.';

  $mail->send();
  echo '<script>alert("MAIL SENT!")</script>';
	echo '<script>window.location="admin1.php"</script>';
} catch (Exception $e) {
  echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
  echo '<script>alert("ERROR OCCURED WHILE SENDING MAIL!")</script>';
	echo '<script>window.location="admin1.php"</script>';
}

?>