<?php
$con=mysqli_connect("localhost","root","root","ani");
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

// Perform queries and print out affected rows
mysqli_query($con,"DELETE FROM a WHERE fname='d'");
$rs = mysqli_affected_rows($con);
echo $rs;
mysqli_close($con);
?>