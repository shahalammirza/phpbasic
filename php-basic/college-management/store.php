<?php
	session_start();
	if(!isset($_SESSION['login'])){
		header("Location:login.php");
		die();
	}
	$name = $_POST['name'];
	$roll = $_POST['roll'];
	$reg = $_POST['reg'];
	$dep = $_POST['dep'];
	$dob = $_POST['dob'];

	require 'connection.php';

	$sql ="INSERT INTO students VALUES(NULL,'$name',$roll,$reg,'$dep','$dob')";
	$result = $conn->query($sql);
	if($result){
		session_start();
		$_SESSION['msg'] = "Insert Successfully";
		header("Location: index.php");
	}



?>