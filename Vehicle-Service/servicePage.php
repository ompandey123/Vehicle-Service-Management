<?php 
require 'conn.php';
session_start();
$userId = $_SESSION["id"];
 ?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="style2.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<title>VSMS - Home</title>
</head>
<body style="background-image: url('garage1.jpeg');">
	<nav style="background: rgb(2,0,36);
	background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(98,0,255,1) 0%, rgba(160,30,105,1) 30%, rgba(180,34,114,1) 45%, rgba(214,40,128,1) 65%);"> 
		<label class="logo">VSMS</label>
		<ul>
			<li><a href="#" style="text-decoration: none; font-weight: bold;">About</a></li>
			<li><a href="home.php" style="text-decoration: none; font-weight: bold;">Our Services</a></li>
			<li><a href="#" style="text-decoration: none; font-weight: bold;">Contact</a></li>
			<li><a href="yourRequest.php" style="text-decoration: none; font-weight: bold;">Your Requests</a></li>
			<li><a href="servicePage.php" style="text-decoration: none; font-weight: bold;">Book a Service</a></li>
			<li><a href="logout.php" style="text-decoration: none; font-weight: bold;">Logout</a></li>
			<li><a style="text-decoration: none; font-weight: bold;"><?php echo $_SESSION['username']?></a></li>
		</ul>
	</nav>

	<div class="indexImg">
		<label class="form">
			<center><h1>Book Your Service</h1></center>
			<hr style="width: 100%; border:1px solid black">
			<form action="booking.php" method="POST">
				<input type="hidden" name="uid" value="<?php echo $userId ?>">

				<label class="lableTxt">Name</label>
				<input type="text" name="name" class="field"><br><br>

				<label class="lableTxt">Vehicle Type</label>
				<input type="text" name="vehicle_type" class="field"><br><br>

				<label class="lableTxt">Vehicle Name</label>
				<input type="text" name="vehicle_name" class="field"><br><br>

				<label class="lableTxt">Select Service</label><br><br>
				<select style="width: 100%;" class="servicefield" name="service">
					<option value="" selected disabled>Select Service</option>
					<option value="Standard Service">Standard Service</option>
					<option value="Pro Service">Pro Service</option>
					<option value="Premium Service">Premium Service</option>
				</select><br><br>

				<label class="lableTxt">Select Price</label><br><br>
				<select style="width: 100%;" class="servicefield" name="cost">
					<option value="" selected disabled>Select Price</option>
					<option value="&#8377 500-Standard Service for 1 month">&#8377 500-Standard Service for 1 month</option>
					<option value="&#8377 600-Standard Service for 3 month">&#8377 600-Standard Service for 3 month</option>
					<option value="&#8377 700-Standard Service for 6 month">&#8377 700-Standard Service for 6 month</option>
				    <option value="&#8377 999-Standard Service for 1 Year" >&#8377 999-Standard Service for 1 Year</option>
					<option value="" selected disabled>Select Price</option>
					<option value="&#8377 1000-Pro Service for 1 month">&#8377 1000-Pro Service for 1 month</option>
					<option value="&#8377 1500-Pro Service for 3 month">&#8377 1500-Pro Service for 3 month</option>
					<option value="&#8377 1750-Pro Service for 6 month">&#8377 1750-Pro Service for 6 month</option>
					<option value="&#8377 1999-Pro Service for 1 Year">&#8377 1500-Pro Service for 1 Year</option>
					<option value="" selected disabled>Select Price</option>
					<option value="&#8377 1999-Premium Service for 1 month">&#8377 1999-Premium Service for 1 month</option>
					<option value="&#8377 2999-Premium Service for 3 month">&#8377 2999-Premium Service for 3 month</option>
					<option value="&#8377 5500-Premium Service for 6 month">&#8377 5500-Premium Service for 6 month</option>
					<option value="&#8377 6000-Premium Service for 1 Year">&#8377 6000-Premium Service for 1 Year</option>
				</select><br><br>

				<label class="lableTxt">Registration Number</label>
				<input type="text" name="reg_no" class="field"><br><br>

				<label class="lableTxt">Contact</label>
				<input type="text" name="contact" class="field"><br><br>

				<label class="lableTxt">Pick Up Address</label>
				<input type="text" name="address" class="field"><br><br><br>

				<center><input type="submit" name="submit" class="submit" value="Book"></center><br><br>
			</form>
			<center><a href="home.php"><button class="submit">Back</button></a></center>
		</label>
		<img class="garageImage"src="garage1.jpeg">
	</div>
</body>
</html>