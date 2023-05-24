<?php

require 'conn.php';
session_start();

if(isset($_POST["submit"]))
{
	$name=$_POST["name"];
	$contact=$_POST["contact"];
	$email=$_POST["email"];
	$password=$_POST["password"];
	$address=$_POST["address"];
	$currentDateTime = date("Y-m-d H:i:s");

	$query = "INSERT INTO usertb(name, contact, email, password, address, regTime) VALUES('$name', '$contact', '$email', '$password', '$address', '$currentDateTime')";
	mysqli_query($conn, $query);
	echo "<script>alert('You Are registered');</script>";
	// $_SESSION["username"] = $name;

	header("Location: confirmation.php");
}

?>