<?php
include_once 'database.php';
$sql = "DELETE FROM tenants WHERE userid='" . $_GET["userid"] . "'";
if (mysqli_query($conn, $sql)) {
 echo "Record deleted successfully";
 header("location:tenants.php");
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
?>