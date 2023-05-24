<?php 
require 'adminConn.php';
session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style2.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="admin.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<title>VSMS - Manage Request</title>
</head>
<body>
	<nav style="background: black"> 
		<label class="logo">VSMS</label>
		<ul>
			<li><a style="text-decoration: none; font-weight: bold;"><?php echo $_SESSION['adminname']?></a></li>
		</ul>
	</nav>

	<div class="indexImg">
		<label style="top: 10%;" class="form">
			<center><h1>Your Requests</h1></center>
			<hr style="width: 100%; border:1px solid black">
			<?php  
			$sql = "SELECT * FROM usertb";
			$result = mysqli_query($conn, $sql);

			if(mysqli_num_rows($result) > 0)
			{
			?>
			<table cellpadding="7px" border="2px">
				<thead>
					<th style="text-align: center; padding: 8px;">ID</th>
					<th style="text-align: center; padding: 8px;">Name</th>
					<th style="text-align: center; padding: 8px;">Contact</th>
					<th style="text-align: center; padding: 8px;">Email Address</th>
					<th style="text-align: center; padding: 8px;">Password</th>
					<th style="text-align: center; padding: 8px;">Address</th>
					<th style="text-align: center; padding: 8px;">Register Date</th>
					<th style="text-align: center; padding: 8px;">Edit</th>
					<th style="text-align: center; padding: 8px;">Delete</th>
				</thead>
				<tbody>
					<?php  

					while($row = mysqli_fetch_assoc($result))
					{
					 ?>
					 <tr>
					 	<td style="text-align: center; padding: 8px;"><?php echo $row['id'];  ?></td>
					 	<td style="text-align: center; padding: 8px;"><?php echo $row['name'];  ?></td>
					 	<td style="text-align: center; padding: 8px;"><?php echo $row['contact'];  ?></td>
					 	<td style="text-align: center; padding: 8px;"><?php echo $row['email'];  ?></td>
					 	<td style="text-align: center; padding: 8px;"><?php echo $row['password'];  ?></td>
					 	<td style="text-align: center; padding: 8px;"><?php echo $row['address'];  ?></td>
					 	<td style="text-align: center; padding: 8px;"><?php echo $row['regTime'];  ?></td>
					 	<td style="text-align: center; padding: 8px;"><a href="editForm.php" style="color: green;">Edit</a></td>
					 	<td style="text-align: center; padding: 8px;"><a href="delete.php" style="color: red;">Delete</a></td>

					 </tr>
					<?php  } ?>
				</tbody>
			</table>
			<?php  
		}
		?>
		<center><a href="adminDashboard.php"><button style="margin: 25px;" class="submit">Back</button></a></center>
		</label>
	</div>
</body>
</html>