<?php
	session_start();
	if(!isset($_SESSION['login'])){
		header("Location:login.php");
		die();
	}
	require 'connection.php';

	$id = $_GET['id'];

	$name = $_POST['name'];
	$roll = $_POST['roll'];
	$reg = $_POST['reg'];
	$dep = $_POST['dep'];
	$dob = $_POST['dob'];

	$sql = "UPDATE students SET name = '$name', roll = $roll, reg = $reg, dep = '$dep', dob = '$dob' WHERE id = $id";
	$result = $conn->query($sql);
	if($result){
		session_start();
		$_SESSION['msg'] = "Update successfully";
		header("Location: show.php?id=" .$id);
	}else{
		echo "not update";
	}
?>