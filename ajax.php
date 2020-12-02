<!DOCTYPE html>
<html>
<head>
<style>
table {
  width: 90%;
  border-collapse: collapse;
  margin: 10px;
}
@media only screen and (max-width:600px) {
table{
 margin-left: -10px;
  width:5px;
}
}

table, td, th {
  border: 3px solid green;
  padding: 5px;
 text-align: Center;}
</style>
</head>
<body>

<?php
$q = $_GET['q'];

$con = mysqli_connect('localhost','id15549943_aks','AKS*372936aks','id15549943_smartsociety');
if (!$con) {
  die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"id15549943_smartsociety");
$sql="SELECT * FROM members WHERE userid = '".$q."'";
$result = mysqli_query($con,$sql);

echo "<table>
<tr>
<th>Name</th>
<th>Email</th>
<th>Phone</th>
<th>Parking</th>

</tr>";
while($row = mysqli_fetch_array($result)) {
  echo "<tr>";
  echo "<td>" . $row['name'] . "</td>";
  echo "<td>" . $row['email'] . "</td>";
  echo "<td>" . $row['phone'] . "</td>";
  echo "<td>" . $row['parking'] . "</td>";
  
  echo "</tr>";
}
echo "</table>";
mysqli_close($con);
?>



</body>
</html>