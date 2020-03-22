<?php
require 'connection.php';
$sql = "SELECT * FROM students";
$result = $conn->query($sql);
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
		<h2 class="text-center">Students List</h2>
		<br><br>
	   <table class="table table-bordered table-sm text-center">
	   		<thead>
			   	<tr>
			   		<th>ID</th>
			   		<th>Name</th>
			   		<th>Roll</th>
			   		<th>Reg</th>
			   		<th>Date of Birth</th>
			   		<th>Action</th>
			   	</tr>
		   	</thead>
		   	<tbody>
		   		<?php while($row= $result->fetch_assoc()){ ?>
		   		<tr>
		   			<td><?php echo $row['id'];?></td>
		   			<td><?php echo $row['name'];?></td>
		   			<td><?php echo $row['roll'];?></td>
		   			<td><?php echo $row['reg'];?></td>
		   			<td><?php echo $row['dob'];?></td>
		   			<td>
		   				<a href="show.php?id=<?php echo $row['id'];?>" class="btn btn-success btn-sm">View</a>
		   				<a href="edit.php?id=<?php echo $row['id'];?>" class="btn btn-primary btn-sm">Edit</a>
		   				<a href="delete.php?id=<?php echo $row['id'];?>" onclick="return confirm('Are You Sure?')" class="btn btn-success btn-danger">Delete</a>
		   			</td>
		   		</tr>
		   		<?php }?>
		   	</tbody>
	   </table>
	   <a href="insert.php" class="btn btn-primary">Add students</a>
   </div>
 </body>
</html>