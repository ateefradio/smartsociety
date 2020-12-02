<!DOCTYPE html>
<html>
<head>
<style>
table {
  width: 80%;
  border-collapse: collapse;
  margin: 20px;
}

table, td, th {
  border: 3px solid green;
  padding: 5px;
 text-align: Center;}
</style>
</head>
<body>
<?php
$s = $_GET['s'];

$con = mysqli_connect('localhost','id15549943_aks','Aks#372936aks','id15549943_smartsociety');
if (!$con) {
  die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"id15549943_smartsociety");
$sql="SELECT * FROM tenants WHERE userid = '".$s."'";
$result = mysqli_query($con,$sql);

echo "<table>
<tr>
<th>Name</th>
<th>Phone</th>
<th>People</th>

</tr>";
while($row = mysqli_fetch_array($result)) {
  echo "<tr>";
  echo "<td>" . $row['name'] . "</td>";
  echo "<td>" . $row['phone'] . "</td>";
  echo "<td>" . $row['no'] . "</td>";
  
  echo "</tr>";
}
echo "</table>";
mysqli_close($con);
?>
</body>
</html>