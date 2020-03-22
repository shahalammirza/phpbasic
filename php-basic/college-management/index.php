<?php
	require 'connection.php';
	$sql = "SELECT * FROM students";
	$result = $conn->query($sql);
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
		<title>Cellgeg management system</title>
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
			<h2 class="text-center">Students list</h2>
			<br><br>
			<table class="table table-bordered table-sm text-center">
				<thead>
					<tr>
						<th>Id</th>
						<th>Name</th>
						<th>ROll</th>
						<th>Reg</th>
						<th>dep</th>
						<th>dob</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php while($row = $result->fetch_assoc()){ ?>
					<tr>
						<td><?php echo $row['id'];?></td>
						<td><?php echo $row['name'];?></td>
						<td><?php echo $row['roll'];?></td>
						<td><?php echo $row['reg'];?></td>
						<td><?php echo $row['dep'];?></td>
						<td><?php echo $row['dob'];?></td>
						<td>
							<a href="show.php?id=<?php echo $row['id'];?>" class="btn btn-success btn-sm">View</a>
							<a href="edit.php?id=<?php echo $row['id'];?>" class="btn btn-primary btn-sm">Update</a>
							<a href="delete.php?id=<?php echo $row['id'];?>" onclick="return confirm('Are You Sure?')" class="btn btn-danger btn-sm">Delete</a>
						</td>
					</tr>
					<?php } ?>
				</tbody>
			</table>
			<a href="insert.php" class="btn btn-primary">ADD student</a>
			<a href="logout.php" class="btn btn-warning">Logout</a>
		</div>
	</body>
</html>
