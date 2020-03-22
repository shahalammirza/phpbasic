<?php
	session_start();
	if(!isset($_SESSION['login'])){
		header("Location:login.php");
		die();
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Add students</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<h2 class="text-center">Add new student</h2>
		<br><br>
		<form action="store.php" method="POST">
			<div class="form-group">
		    	<label for="name">Name</label>
		    	<input type="text" class="form-control" name="name"  placeholder="Enter Name">
		  	</div>
		  	<div class="form-group">
		    	<label for="roll">Roll</label>
		    	<input type="text" class="form-control" name="roll"  placeholder="Enter Roll">
		  	</div>
		  	<div class="form-group">
		    	<label for="reg">Reg</label>
		    	<input type="text" class="form-control" name="reg"  placeholder="Enter Reg">
		  	</div>
		  	<div class="form-group">
		    	<label for="dep">Department</label>
		    	<input type="text" class="form-control" name="dep"  placeholder="Enter Depatment">
		  	</div>
		  	<div class="form-group">
		    	<label for="dob">Date of birth</label>
		    	<input type="date" class="form-control" name="dob"  placeholder="Enter dob">
		  	</div>
		  	<button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>
</body>
</html>