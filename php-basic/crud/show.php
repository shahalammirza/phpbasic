<?php
	$id = $_GET['id'];
	require 'connection.php';
	$sql = "SELECT * FROM students WHERE id = $id";
	$result = $conn->query($sql);
	$student = $result->fetch_assoc();
	session_start();
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
		<?php if(isset($_SESSION['msg'])){?>
			<div class="alert alert-success" role="alert">
  				<?php echo $_SESSION['msg'];?>
			</div>
		<?php 
			session_destroy();
		}?>
		<h2 class="text-center">Student Information</h2>
		<br><br>
		<table class="table table-bordered table-sm text-center">
			<tr>
				<th>Name</th>
				<td><?php echo $student['name'];?></td>
			</tr>
			<tr>
				<th>Roll</th>
				<td><?php echo $student['roll'];?></td>
			</tr>
			<tr>
				<th>Reg</th>
				<td><?php echo $student['reg'];?></td>
			</tr>
			<tr>
				<th>Date of Birth</th>
				<td><?php echo $student['dob'];?></td>
			</tr>
			
		</table>
		  <a href="index.php" class="btn btn-primary">Home</a> 
   </div>
 </body>
</html>