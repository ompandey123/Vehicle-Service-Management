<?php

session_start();
require 'conn.php';

if(isset($_POST["submit"]))
{
	$uid= $_POST["uid"];
	$name= $_POST["name"];
	$vehicle_type= $_POST["vehicle_type"];
	$vehicle_name= $_POST["vehicle_name"];
	$service_name= $_POST["service"];
	$cost= $_POST["cost"];
	$reg_no= $_POST["reg_no"];
	$contact= $_POST["contact"];
	$pickup_address= $_POST["address"];
	$currentDateTime = date("Y-m-d H:i:s");

	$query = "INSERT INTO bookingtb(uid, name, vehicle_type, vehicle_name, service_name, cost, reg_no, contact, pickup_address, bookDateTime) VALUES('$uid', '$name', '$vehicle_type', '$vehicle_name', '$service_name', '$cost' ,'$reg_no', '$contact', '$pickup_address','$currentDateTime')";

	mysqli_query($conn, $query);

	echo "<script>alert('Booked');</script>";
	header("Location: yourRequest.php");

}

?>