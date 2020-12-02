<?php
include_once 'database.php';
$sql = "DELETE FROM infopdf WHERE fileid='" . $_GET["fileid"] . "'";
if (mysqli_query($conn, $sql)) {
 echo "Record deleted successfully";
 header("location:table.php");
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
?>