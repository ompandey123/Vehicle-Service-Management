<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="admin.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<title>VSMS - Admin Login</title>
</head>
<body style="background: grey">

	<div class="indexImg">
		<label class="form2">
			
			<form action="adminLogin.php" method="POST">
				<center><h1>VSMS - ADMIN LOGIN</h1></center>
				<hr style="width: 100%; border:1px solid black">
				<?php if(isset($_GET['error'])){ ?>
				<p class="error"><?php echo $_GET['error']; ?></p>
				<?php } ?>
				<input type="hidden" name="">
				<label class="lableTxt">Email</label>
				<input type="text" name="email" class="field"><br><br>
				<label class="lableTxt">Password</label>
				<input type="password" name="password" class="field"><br><br>
				<center><input type="submit" name="submit" value="Login" class="submit"></center>
			</form>
		</label>
	</div>
</body>
</html>