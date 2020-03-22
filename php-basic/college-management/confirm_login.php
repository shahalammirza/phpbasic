<?php
require'connection.php';

$email = $_POST['email'];
$pass = $_POST['password'];

$sql ="SELECT * FROM users WHERE email='$email' AND password='$pass'";
$result = $conn->query($sql);
$rowcount =mysqli_num_rows($result);
if($rowcount == 1){
	session_start();
	$_SESSION['login'] = true;
	header("Location:index.php");
}else{
	session_start();
	$_SESSION['error'] = "Wrong Email and Password";
	header("Location:login.php");
}