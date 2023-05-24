<?php
session_start();

?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<title>VSMS - Add Mechanic</title>
</head>
<body>
	<nav style="background: black"> 
		<label class="logo">VSMS</label>
		<ul>
			<li><a style="text-decoration: none; font-weight: bold;"><?php echo $_SESSION['adminname']?></a></li>
		</ul>
	</nav>

	<div class="indexImg">
		<label class="form">
			<center><h1>Mechanic Registration</h1></center>
			<hr style="width: 100%; border:1px solid black">
			<form action="mechanicReg.php" method="POST">
				<label class="lableTxt">Mechanic Name</label>
				<input type="text" name="name" class="field"><br><br>
				<label class="lableTxt">Mechanic Contact</label>
				<input type="text" name="contact" class="field"><br><br>
				<label class="lableTxt">Mechanic Mail</label>
				<input type="text" name="email" class="field"><br><br>
				<label class="lableTxt">Mechanic Password</label>
				<input type="password" name="password" class="field"><br><br>
				<label class="lableTxt">Mechanic Address</label>
				<input type="text" name="address" class="field"><br><br><br>
				<center><input type="submit" name="submit" value="Add Mechanic" class="submit"></center>
			</form>
		</label>
	</div>
</body>
</html>