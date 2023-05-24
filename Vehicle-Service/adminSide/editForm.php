<?php 
require 'adminConn.php';
session_start();

 ?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="style2.css">
	<link rel="stylesheet" type="text/css" href="admin.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<title>VSMS - Update Request</title>
</head>
<body>
	<nav style="background: black;"> 
		<label class="logo">VSMS</label>
		<ul>
			<li><a style="text-decoration: none; font-weight: bold;"><?php echo $_SESSION['adminname']?></a></li>
		</ul>
	</nav>

	<div class="indexImg">
		<label class="form">
			<center><h1>Book Your Service</h1></center>
			<hr style="width: 100%; border:1px solid black">
			<?php   
				$user_id = $_GET['id'];
				$sql = "SELECT * FROM bookingtb WHERE uid = {$user_id}";
				$result = mysqli_query($conn, $sql);
				if(mysqli_num_rows($result) > 0){
					while ($row = mysqli_fetch_assoc($result)) {
			?>
			<form action="updateRequest.php" method="POST">
				<input type="hidden" name="uid" value="<?php echo $row['uid'] ?>">

				<label class="lableTxt">Name</label>
				<input type="text" name="name" class="field" value="<?php echo $row['name'] ?>"><br><br>

				<label class="lableTxt">Vehicle Type</label>
				<input type="text" name="vehicle_type" class="field" value="<?php echo $row['vehicle_type'] ?>"><br><br>

				<label class="lableTxt">Vehicle Name</label>
				<input type="text" name="vehicle_name" class="field" value="<?php echo $row['vehicle_name'] ?>"><br><br>

				<label class="lableTxt">Select Service</label><br><br>
				<select style="width: 100%;" class="servicefield" name="service">
					<option value="<?php echo $row['service_name']; ?>" selected disabled><?php echo $row['service_name'] ?></option>
					<option value="Standard Service">Standard Service</option>
					<option value="Pro Service">Pro Service</option>
					<option value="Premium Service">Premium Service</option>
				</select><br><br>

				<label class="lableTxt">Select Price</label><br><br>
				<select style="width: 100%;" class="servicefield" name="cost">
					<option value="<?php echo $row['cost']; ?>" selected disabled><?php echo $row['cost']; ?></option>
					<option value="&#8377 500-Standard Service for 1 month">&#8377 500-Standard Service for 1 month</option>
					<option value="&#8377 600-Standard Service for 3 month">&#8377 600-Standard Service for 3 month</option>
					<option value="&#8377 700-Standard Service for 6 month">&#8377 700-Standard Service for 6 month</option>
				    <option value="&#8377 999-Standard Service for 1 Year" >&#8377 999-Standard Service for 1 Year</option>
					<option value="" selected disabled>Select Price</option>
					<option value="&#8377 1000-Pro Service for 1 month">&#8377 1000-Pro Service for 1 month</option>
					<option value="&#8377 1500-Pro Service for 3 month">&#8377 1500-Pro Service for 3 month</option>
					<option value="&#8377 1750-Pro Service for 6 month">&#8377 1750-Pro Service for 6 month</option>
					<option value="&#8377 1999-Pro Service for 1 Year">&#8377 1500-Pro Service for 1 Year</option>
					<option value="<?php echo $row['cost']; ?>" selected disabled><?php echo $row['cost']; ?></option>
					<option value="&#8377 1999-Premium Service for 1 month">&#8377 1999-Premium Service for 1 month</option>
					<option value="&#8377 2999-Premium Service for 3 month">&#8377 2999-Premium Service for 3 month</option>
					<option value="&#8377 5500-Premium Service for 6 month">&#8377 5500-Premium Service for 6 month</option>
					<option value="&#8377 6000-Premium Service for 1 Year">&#8377 6000-Premium Service for 1 Year</option>
				</select><br><br>

				<label class="lableTxt">Registration Number</label>
				<input type="text" name="reg_no" class="field" value="<?php echo $row['reg_no'] ?>"><br><br>

				<label class="lableTxt">Contact</label>
				<input type="text" name="contact" class="field" value="<?php echo $row['contact'] ?>"><br><br>

				<label class="lableTxt">Pick Up Address</label>
				<input type="text" name="address" class="field" value="<?php echo $row['pickup_address'] ?>"><br><br><br>

				<label class="lableTxt">Mechanic Name</label><br>
				<!-- <input type="text" name="mechname" class="field"><br><br><br> -->
				<?php
				$sql2 = "SELECT mechanic_name from mechanictb";
				$result2 = mysqli_query($conn, $sql2);
				if(mysqli_num_rows($result2) > 0)
				{
					echo '<select style="width: 100%;" name="mechname">
					<option value="" selected disabled>Select Mechanic</option>';
					while($row2 = mysqli_fetch_assoc($result2))
					{
						echo "<option value='{$row2['mechanic_name']}'>{$row2['mechanic_name']}</option>";
					}
					echo "</select><br><br><br>";
				}
				?>

				<label class="lableTxt">Status</label>
				<select style="width: 100%;" name="status">
					<option value="" selected disabled>Add Status</option>
					<option value="Pending" style="background-color: red; color: white;">Pending</option>
					<option value="In Progress" style="background-color: yellow; color: black;">In Progress</option>
					<option value="Completed" style="background-color: green; color: white;">Completed</option>
				</select><br><br>

				<center><input type="submit" name="submit" class="submit" value="Update Request"></center><br><br>
			</form>
		<?php   
	}
}

	?>
			<center><a href="manageReqs.php"><button class="submit">Back</button></a></center>
		</label>
	</div>
</body>
</html>