<?php

$email = $_POST["email"];

$host = "localhost";
$dbname = "clingsTechEmails";
$user = "root";
$pass = "";


$conn = mysqli_connect($host,$user,$pass,$dbname);

if(mysqli_connect_errno()) {
	die("connection error: " . mysqli_connect_error());
}




$sql = "INSERT INTO email(email) VALUES (?)";

$stmt = mysqli_stmt_init($conn);

if( ! mysqli_stmt_prepare($stmt, $sql))  {
	die(mysqli_error($conn));
}

mysqli_stmt_bind_param($stmt, "s", $email);

mysqli_stmt_execute($stmt);
header('location:index.php');

?>