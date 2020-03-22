<?php
	require 'connection.php';
	$id = $_GET['id'];
	$sql = "SELECT * FROM students WHERE id=$id";
	$result = $conn->query($sql);
	$students = $result->fetch_assoc();
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
		<h2 class="text-center">Edit Student Information</h2>
		<br><br>
		<form action="update.php?id=<?php echo $students['id'] ; ?>" method="POST">
			<div class="form-group">
		    	<label for="name">Name</label>
		    	<input type="text" class="form-control" value="<?php echo $students['name'];?>" name="name"  placeholder="Enter Name">
		  	</div>
		  	<div class="form-group">
		    	<label for="roll">Roll</label>
		    	<input type="text" class="form-control" value="<?php echo $students['roll'];?>" name="roll"  placeholder="Enter Roll">
		  	</div>
		  	<div class="form-group">
		    	<label for="reg">Reg</label>
		    	<input type="text" class="form-control" name="reg" value="<?php echo $students['reg'];?>"  placeholder="Enter Reg">
		  	</div>
		  	<div class="form-group">
		    	<label for="dep">Department</label>
		    	<input type="text" class="form-control" value="<?php echo $students['dep'];?>" name="dep"  placeholder="Enter Depatment">
		  	</div>
		  	<div class="form-group">
		    	<label for="dob">Date of birth</label>
		    	<input type="date" class="form-control" name="dob" value="<?php echo $students['dob'];?>"  placeholder="Enter dob">
		  	</div>
		  	<button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>
</body>
</html>