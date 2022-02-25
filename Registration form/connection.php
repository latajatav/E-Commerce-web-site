<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hello";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if($conn)
{
	echo "connection ok";
}
else
{
	die("connection faild because ".mysqli_connect_error());
}
?>