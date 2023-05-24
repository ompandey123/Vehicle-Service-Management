<?php

require 'adminConn.php';
if(isset($_POST['submit']))
{
	$name = $_POST['name'];
	$contact = $_POST['contact'];
	$mail = $_POST['email'];
	$password = $_POST['password'];
	$address = $_POST['address'];

	$query = "INSERT INTO mechanictb(mechanic_name, mechanic_contact, mechanic_mail, mechanic_password, mechanic_address) VALUES('$name', '$contact', '$mail', '$password', '$address')";

	mysqli_query($conn, $query);
	echo "<script>alert('Mechanic Added');</script>";
	header("Location: manageMechanic.php");
}

?>