<?php

require 'adminConn.php';

$uid = $_POST['uid'];
$mech_name = $_POST['mechname'];
$status = $_POST['status'];

$sql = "UPDATE bookingtb SET mechanic_name='{$mech_name}', status='{$status}' WHERE uid = '{$uid}'";

$result = mysqli_query($conn, $sql) or die("Unsuccessful");

echo "<script>alert('Updated')</script>";
header("Location: manageReqs.php");

?>