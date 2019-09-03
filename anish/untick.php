<?php
$a =$_REQUEST['a'];
$con=mysqli_connect("localhost","root","root","task");
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  $sql="update checkk set b='1' where a=$a";
  $result=mysqli_query($con,$sql);
  echo "set to one";
mysqli_close($con);
?>