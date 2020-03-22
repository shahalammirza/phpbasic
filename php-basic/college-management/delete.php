<?php
	session_start();
	if(!isset($_SESSION['login'])){
		header("Location:login.php");
		die();
	}
	$id = $_GET['id'];
	require 'connection.php';
	$sql = "DELETE FROM students WHERE id = $id";
	if($conn->query($sql)){
		session_start();
		$_SESSION['msg'] = "Deleted successfully";
		header("Location: index.php");
	}
?>