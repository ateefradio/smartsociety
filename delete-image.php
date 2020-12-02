<?php
include_once 'database.php';
$sql = "DELETE FROM output_images WHERE imageId='" . $_GET["imageId"] . "'";
if (mysqli_query($conn, $sql)) {
 echo "Record deleted successfully";
 header("location:listImages.php");
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
?>