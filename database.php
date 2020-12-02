<?php
//$servername='localhost';
//$username='aks';
//$password='Aks#372936aks';
//$dbname = "id15549943_smartsociety";
//$conn=mysqli_connect($servername,$username,$password,"$dbname");
//if(!$conn){
  // die('Could not Connect My Sql:' .mysql_error());
//}
?> 

<?php
$servername='localhost';
$username='root';
$password='';
$dbname = "smartsociety";
$conn=mysqli_connect($servername,$username,$password,"$dbname");
if(!$conn){
   die('Could not Connect My Sql:' .mysql_error());
}
?>