<?php

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "task";
$lic=$_REQUEST['licenceId'];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql ="update display set monitor='0' where license='$lic'" ;

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully2";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();



?>
