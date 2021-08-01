<?php


include "database.php";

$sql = "DELETE FROM rform WHERE names ='" . $_GET['name'] . "'"; 


if (mysqli_query($conn, $sql)) {
  
   echo "<script>alert('delete successful!')</script>";
   include "customers.php";

 } else {
   echo "error detecting record" . mysqli_error($conn);
 }

mysqli_close($conn);

?> 