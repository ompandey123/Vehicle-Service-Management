<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="login.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<title>VSMS - Home</title>
</head>
<body style="background: rgb(2,0,36);
background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(98,0,255,1) 0%, rgba(160,30,105,1) 30%, rgba(180,34,114,1) 45%, rgba(214,40,128,1) 65%);">

	<div class="indexImg">
		<label class="form2">
			
			<form action="login.php" method="POST">
				<center><h1>VSMS - LOGIN</h1></center>
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
				<center><a href="index.php" style="text-decoration: none; color: black; margin: 5px;">Go To The main Page</a></center>
			</form>
		</label>
	</div>
</body>
</html>