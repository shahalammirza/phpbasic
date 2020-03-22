<?php
	require 'connection.php';

	$id = $_GET['id'];

	$name = $_POST['name'];
	$roll = $_POST['roll'];
	$reg = $_POST['reg'];
	$dob = $_POST['dob'];
	$sql = "UPDATE students SET name = '$name', roll = $roll, reg = $reg, dob = '$dob' WHERE id = $id";

	$result = $conn->query($sql);
	if($result){
		session_start();
		$_SESSION['msg'] = "Update Successfully";
		header("Location: show.php?id=". $id);
	}

?>