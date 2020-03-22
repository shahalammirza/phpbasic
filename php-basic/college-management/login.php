<?php
	session_start();
?> 
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<h2 class="text-center">Login</h2>
		<br><br>
		 <?php if (isset($_SESSION['error'])) { ?>
			<div class="alert alert-danger" role="alert">
  				<?php echo $_SESSION['error'];?>
			</div>
			<?php 
				session_destroy();
			} ?>
	
		 <?php if (isset($_SESSION['reg_msg'])) { ?>
			<div class="alert alert-success" role="alert">
  				<?php echo $_SESSION['reg_msg'];?>
			</div>
			<?php 
				session_destroy();
			} ?>
		<br><br>
		<form action="confirm_login.php" method="POST">
			<div class="form-group">
		    	<label for="email">Email</label>
		    	<input type="email" class="form-control" required="" name="email"  placeholder="Enter Name">
		  	</div>
		  	<div class="form-group">
		    	<label for="password">Password</label>
		    	<input type="password" class="form-control" required="" name="password"  placeholder="Enter Roll">
		  	</div>
		  	<button type="submit" class="btn btn-success">Login</button>
		  	<a type="submit" class="btn btn-link" href="registration.php">Creat a new account!</a>
		</form>
	</div>
</body>
</html>