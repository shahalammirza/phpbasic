<?php
	require 'connection.php';
	$id = $_GET['id'];
	$sql = "DELETE FROM students WHERE id= $id";
	$result = $conn->query($sql);
	if($result){
		session_start();
		$_SESSION['msg'] = "Delete successfully";
		header("Location:index.php");
	}

?>