<?php 
session_start();

 ?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style2.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<title>VSMS - Home</title>
</head>
<body>
	<nav style="background: rgb(2,0,36);
	background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(98,0,255,1) 0%, rgba(160,30,105,1) 30%, rgba(180,34,114,1) 45%, rgba(214,40,128,1) 65%);"> 
		<label class="logo">VSMS</label>
		<ul>
			<li><a href="#" style="text-decoration: none; font-weight: bold;">About</a></li>
			<li><a href="ourService.php" style="text-decoration: none; font-weight: bold;">Our Services</a></li>
			<li><a href="#" style="text-decoration: none; font-weight: bold;">Contact</a></li>
			<li><a href="yourRequest.php" style="text-decoration: none; font-weight: bold;">Your Requests</a></li>
			<li><a href="servicePage.php" style="text-decoration: none; font-weight: bold;">Book a Service</a></li>
			<li><a href="logout.php" style="text-decoration: none; font-weight: bold;">Logout</a></li>
			<li><a style="text-decoration: none; font-weight: bold;"><?php echo $_SESSION['username']?></a></li>
		</ul>
	</nav>

	<div class="indexImg">
		<label style="top: 10%;" class="form">
			<p>THANK YOU FOR GETTING REGISTERED WITH VSMS NOW YOU CAN LOGIN TO YOUR ACCOUNT BY CLICKING ON THE FOLLOWING BUTTON</p>
			<a href="loginPage.php"><button>Login Here</button></a>
		</label>
	</div>
</body>
</html>