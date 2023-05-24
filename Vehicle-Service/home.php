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
<body style="background-image: url('garage1.jpeg');">
	<nav style="background: rgb(2,0,36);
	background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(98,0,255,1) 0%, rgba(160,30,105,1) 30%, rgba(180,34,114,1) 45%, rgba(214,40,128,1) 65%);"> 
		<label class="logo">VSMS</label>
		<ul>
			<li><a href="#" style="text-decoration: none; font-weight: bold;">About</a></li>
			<!-- <li><a href="ourService.php">Our Services</a></li> -->
			<li><a href="#" style="text-decoration: none; font-weight: bold;">Contact</a></li>
			<li><a href="yourRequest.php" style="text-decoration: none; font-weight: bold;">Your Requests</a></li>
			<li><a href="servicePage.php" style="text-decoration: none; font-weight: bold;">Book a Service</a></li>
			<li><a href="logout.php" style="text-decoration: none; font-weight: bold;">Logout</a></li>
			<li><a style="text-decoration: none; font-weight: bold;"><?php echo $_SESSION['username']?></a></li>
		</ul>
	</nav>

	<div class="indexImg">
		<label style="top: 10%;" class="form">
			<div class="container">
				<center><h1 class="">Services</h1></center>
				<hr style="width: 100%; border: 1px solid black"><br><br>
				<div class="container">
					<div class="row">
						<div class="col-md-6">
							<div class="card">
								<a href="#"><img class="card-img-top" src="garage1.jpeg" style="border: 1px solid black; border-radius: 15px; height: 600px; width: 800px;"></a>
								<div class="card-body">
									<h1>Standard Services</h1>
									<hr style="width: 50%; border: 1px solid black">
									<p class="card-text" style="font-weight: lighter;">
										In <b style="color: red;">Standard-Service</b> package we provide you the following :-<br><br>
										> Puncture Fixing<br>
										> Washing<br>
										> Full Check-Up<br>
										> Towing<br>
										> Services per 1500 kms for a year.<br>
										> All these in just &#8377 999 p/a<br>
									</p>
								</div>
							</div><br><br>
							<div class="card">
								<a href="#"><img class="card-img-top" src="garage1.jpeg" style="border: 1px solid black; border-radius: 15px; height: 600px; width: 800px;"></a>
								<div class="card-body">
									<h1>Pro Services</h1>
									<hr style="width: 50%; border: 1px solid black">
									<p class="card-text" style="font-weight: lighter;">
										In <b style="color: red;">Pro-Service</b> package we provide you the following :-<br><br>
										> Puncture Fixing<br>
										> Washing(Outside + Inside)<br>
										> Wheel Tuning.<br>
										> Scratch fixing<br>
										> Full Check-Up<br>
										> Towing<br>
										> Services per 1000 kms for a year.<br>
										> All these in just &#8377 1999 p/a<br>
									</p>
								</div>
							</div><br><br>
							<div class="card">
								<a href="#"><img class="card-img-top" src="garage1.jpeg" style="border: 1px solid black; border-radius: 15px; height: 600px; width: 800px;"></a>
								<div class="card-body">
									<h1>Premium Services</h1>
									<hr style="width: 50%; border: 1px solid black">
									<p class="card-text" style="font-weight: lighter;">
										In <b style="color: red;">Premium-Service</b> package we provide you the following :-<br><br>
										> Puncture Fixing<br>
										> Washing(Outside + Inside)<br>
										> Wheel Tuning.<br>
										> Full Body Replacement (optional)<br>
										> Full Interior Replacement<br>
										> Oil Change<br>
										> Full Check-Up<br>
										> Services per 800 kms for a year.<br>
										> All these in just &#8377 6000 p/a<br>
									</p>
								</div>
							</div>
						</div>
					</div>	
				</div>
			</div>
			<center><a href="servicePage.php"><button class="submit" style="margin-top: 50px;">Book Your Service</button></a></center>
		</label>
	</div>
</body>
</html>