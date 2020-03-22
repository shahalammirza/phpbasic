<?php
	$id = $_GET['id'];
	require 'connection.php';
	$sql = "SELECT * FROM students WHERE id = $id";
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
	<title>Students Details</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<?php if (isset($_SESSION['msg'])) { ?>
			<div class="alert alert-success" role="alert">
  				<?php echo $_SESSION['msg'];?>
			</div>
			<?php 
				session_destroy();
			} ?>
		<h2 class="text-center">Student details</h2>
		<br><br>
		<table class="table table-bordered table-sm text-center">
			<tr>
				<th>Name</th>
				<td><?php echo $students['name']?></td>
			</tr>
			<tr>
				<th>Roll</th>
				<td><?php echo $students['roll']?></td>
			</tr>
			<tr>
				<th>Reg</th>
				<td><?php echo $students['reg']?></td>
			</tr>
			<tr>
				<th>Dep</th>
				<td><?php echo $students['dep']?></td>
			</tr>
			<tr>
				<th>Dob</th>
				<td><?php echo $students['dob']?></td>
			</tr>
		</table>
		<a href="edit.php?id=<?php echo $students['id']?>" class="btn btn-primary">Edit Information</a>
	</div>
	
</body>
</html>