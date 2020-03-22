<?php
	require 'connection.php';
	$id = $_GET['id'];
	$sql = "SELECT * FROM students WHERE id = $id";
	$result = $conn->query($sql);
	$students = $result->fetch_assoc();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>CRUD</title>
</head>
<body>
	<div class="container">
		<h2 class="text-center">Edit Students Information</h2>
		<br><br>
		<form method="post" action="update.php?id=<?php echo $students['id'];?>">
		  <div class="form-group">
		    <label for="name">Name</label>
		    <input type="text" class="form-control" value="<?php echo $students['name'];?>" name="name"  placeholder="Enter Name">
		  </div>
		  <div class="form-group">
		    <label for="name">Roll</label>
		    <input type="text" class="form-control" value="<?php echo $students['roll'];?>" name="roll"  placeholder="Enter Roll">
		  </div>
		  <div class="form-group">
		    <label for="name">Reg</label>
		    <input type="text" class="form-control" value="<?php echo $students['reg'];?>" name="reg"  placeholder="Enter Reg">
		  </div>
		  <div class="form-group">
		    <label for="name">Date of Birth</label>
		    <input type="date" class="form-control" value="<?php echo $students['dob'];?>" name="dob"  placeholder="Enter dob">
		  </div>
		  <button type="submit" class="btn btn-primary">Submit</button>
		</form>
		   
   </div>
 </body>
</html>