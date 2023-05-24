<?php 
require 'conn.php';
session_start();
$userId = $_SESSION["id"];

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
			<!-- <li><a href="home.php">Our Services</a></li> -->
			<li><a href="#" style="text-decoration: none; font-weight: bold;">Contact</a></li>
			<li><a href="yourRequest.php" style="text-decoration: none; font-weight: bold;">Your Requests</a></li>
			<li><a href="servicePage.php" style="text-decoration: none; font-weight: bold;">Book a Service</a></li>
			<li><a href="logout.php" style="text-decoration: none; font-weight: bold;">Logout</a></li>
			<li><a style="text-decoration: none; font-weight: bold;"><?php echo $_SESSION['username']?></a></li>
		</ul>
	</nav>

	<div class="indexImg">
		<label style="top: 10%;" class="form">
			<center><h1>Your Requests</h1></center>
			<hr style="width: 100%; border:1px solid black">
			<?php  
			$sql = "SELECT name, vehicle_type, vehicle_name, service_name, cost, reg_no, contact, pickup_address, mechanic_name, status FROM bookingtb WHERE uid= $userId";
			$result = mysqli_query($conn, $sql);

			if(mysqli_num_rows($result) > 0)
			{
			?>
			<table cellpadding="7px" border="2px">
				<thead>
					<th style="text-align: center; padding: 8px;">Name</th>
					<th style="text-align: center; padding: 8px;">Vehicle Type</th>
					<th style="text-align: center; padding: 8px;">Vehicle Name</th>
					<th style="text-align: center; padding: 8px;">Service Name</th>
					<th style="text-align: center; padding: 8px;">Cost</th>
					<th style="text-align: center; padding: 8px;">Reg No</th>
					<th style="text-align: center; padding: 8px;">Contact</th>
					<th style="text-align: center; padding: 8px;">Pick Up</th>
					<th style="text-align: center; padding: 8px;">Mech Name</th>
					<th style="text-align: center; padding: 8px;">Status</th>
					
				</thead>
				<tbody>
					<?php  

					while($row = mysqli_fetch_assoc($result))
					{
					 ?>
					 <tr>
					 	<td style="text-align: center; padding: 8px;"><?php echo $row['name'];  ?></td>
					 	<td style="text-align: center; padding: 8px;"><?php echo $row['vehicle_type'];  ?></td>
					 	<td style="text-align: center; padding: 8px;"><?php echo $row['vehicle_name'];  ?></td>
					 	<td style="text-align: center; padding: 8px;"><?php echo $row['service_name'];  ?></td>
					 	<td style="text-align: center; padding: 8px;"><?php echo $row['cost'];  ?></td>
					 	<td style="text-align: center; padding: 8px;"><?php echo $row['reg_no'];  ?></td>
					 	<td style="text-align: center; padding: 8px;"><?php echo $row['contact'];  ?></td>
					 	<td style="text-align: center; padding: 8px;"><?php echo $row['pickup_address'];  ?></td>
					 	<td style="text-align: center; padding: 8px;"><?php echo $row['mechanic_name'];  ?></td>
					 	<td style="text-align: center; padding: 8px;"><?php echo $row['status'];  ?></td>

					 </tr>
					<?php  } ?>
				</tbody>
			</table>
			<?php  
		}
		?>
		<center><a href="home.php"><button style="margin: 25px;" class="submit">Back</button></a></center>
		</label>
	</div>
</body>
</html>