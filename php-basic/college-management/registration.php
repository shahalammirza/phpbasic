<?php
	session_start();

?> 
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Registration</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<h2 class="text-center">Registration</h2>
		<br><br>
		 <?php if (isset($_SESSION['error_msg'])) { ?>
			<div class="alert alert-danger" role="alert">
  				<?php echo $_SESSION['error_msg'];?>
			</div>
			<?php 
				session_destroy();
			} ?>
		<br><br>
		<form action="confirmregistration.php" method="POST">
			<div class="form-group">
		    	<label for="name">Name</label>
		    	<input type="text" class="form-control" required="" name="name"  placeholder="Enter Name">
		  	</div>
		  	<div class="form-group">
		    	<label for="email">Email</label>
		    	<input type="email" class="form-control" required="" name="email"  placeholder="Enter Email">
		  	</div>
		  	<div class="form-group">
		    	<label for="password">Password</label>
		    	<input type="password" class="form-control" required="" name="password"  placeholder="Enter Password">
		  	</div>
		  	<div class="form-group">
		    	<label for="password">Confirm Password</label>
		    	<input type="password" class="form-control" required="" name="confirm_password"  placeholder="Enter Confirm Password">
		  	</div>
		  	<button type="submit" class="btn btn-success">Submit</button>
		  	Already have an account!<a type="submit" class="btn btn-link" href="login.php">Login</a>
		</form>
	</div>
</body>
</html>