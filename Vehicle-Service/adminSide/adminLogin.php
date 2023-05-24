<?php 

session_start();
require 'adminConn.php';
if(isset($_POST['email']) && $_POST['password'])
{
	function validate($data)
	{
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
}

$email = validate($_POST["email"]);
$pass = validate($_POST["password"]); 

if(empty($email)){
	header("Location: adminLoginPage.php?erro=Email Field is required");
	exit();
}
else if(empty($pass)){
header("Location: adminLoginPage.php?erro=Password Field is required");	
exit();
}

$sql = "SELECT * FROM admintb WHERE email = '$email' AND password = '$pass'";
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) === 1)
{
	$row = mysqli_fetch_assoc($result);
	if($row['email'] === $email && $row['password'] === $pass)
	{
		$_SESSION['adminname'] = $row['name'];
		$_SESSION['email'] = $row['email'];
		$_SESSION['id'] = $row['id'];
		echo "<script>alert('You Are registered');</script>";
		header("Location: adminDashboard.php");
	}
	else
	{
		header("Location: adminLoginPage.php?erro=Incorrect Credentials");
	}
}
else
{
	header("Location: warning.php");
}

?>