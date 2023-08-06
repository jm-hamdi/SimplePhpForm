<?php
$serverName='localhost';
$userName='root';
$password='';
$db='DbName';
$conn=mysqli_connect($serverName,$userName,$password,$db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>