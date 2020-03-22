<?php
	$name = $_POST['name'];
	$roll = $_POST['roll'];
	$reg = $_POST['reg'];
	$dob = $_POST['dob'];
	require 'connection.php';
	$sql = "INSERT INTO students VALUES (NULL,'$name',$roll,$reg,'$dob')";
	if($conn->query($sql)){
		session_start();
		$_SESSION['msg']= "Insert Successsfully";
		header("Location: index.php");
	}else{
		echo "not insert";
	}

?>