<?php
$id = $_REQUEST['id'];
$con=mysqli_connect("localhost","root","root","ani");
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

// Perform queries and print out affected rows
  //$sql="DELETE FROM aa WHERE vehicleName='".$id."'";
  $sql3="DELETE FROM `aa` WHERE vehicleName ='$id'";
  echo $sql3;  
$r = mysqli_query($con,$sql3);
$rs = mysqli_affected_rows($con);
echo $rs;
mysqli_close($con);

?>