<?php 
session_start();

 ?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style2.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="admin.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<title>VSMS - Admin Dashboard</title>
</head>
<body>
	<nav style="background: black"> 
		<label class="logo">VSMS</label>
		<ul>
			<li><a href="adminLogout.php" style="text-decoration: none; font-weight: bold;">Logout</a></li>
			<li><a style="text-decoration: none; font-weight: bold;"><?php echo $_SESSION['adminname']?></a></li>
		</ul>
	</nav>

	<div class="indexImg">
		<label style="top: 10%;" class="form">
			<a href="manageReqs.php"><center><div class="manage">
				<img src="garage1.jpeg" class="cardImage"><br><br>
					<p class="cardText">Manage Request</p>
			</div></center></a><br><br><br>
			<a href="manageUser.php"><center><div class="manage">
				<img src="garage1.jpeg" class="cardImage"><br><br>
					<p class="cardText">Manage Users</p>
			</div></center></a><br><br><br>
			<a href="addMechs.php"><center><div class="manage">
				<img src="garage1.jpeg" class="cardImage"><br><br>
					<p class="cardText">Add Mechanics</p>
			</div></center></a><br><br><br>
			<a href="manageMechanic.php"><center><div class="manage">
				<img src="garage1.jpeg" class="cardImage"><br><br>
					<p class="cardText">Manage Mechanics</p>
			</div></center></a>
		</label>
	</div>

	 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>