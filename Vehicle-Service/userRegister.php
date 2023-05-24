<!DOCTYPE html>
<html>
<head>
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
			<li><a href="home.php" style="text-decoration: none; font-weight: bold;">Our Services</a></li>
			<li><a href="#" style="text-decoration: none; font-weight: bold;">Contact</a></li>
		</ul>
	</nav>

	<div class="indexImg">
		<label class="form">
			<center><h1>User Registration</h1></center>
			<hr style="width: 100%; border:1px solid black">
			<form action="registration.php" method="POST">
				<label class="lableTxt">Name</label>
				<input type="text" name="name" class="field"><br><br>
				<label class="lableTxt">Contact</label>
				<input type="text" name="contact" class="field"><br><br>
				<label class="lableTxt">Email</label>
				<input type="text" name="email" class="field"><br><br>
				<label class="lableTxt">Password</label>
				<input type="password" name="password" class="field"><br><br>
				<label class="lableTxt">Address</label>
				<input type="text" name="address" class="field"><br><br><br>
				<center><input type="submit" name="submit" value="Register" class="submit"></center>
				<center>Or</center>
				<center><a href="loginPage.php">Login Here!</a> If Already Registered</center>
			</form>
		</label>
		<img class="garageImage"src="garage1.jpeg">
	</div>
</body>
</html>