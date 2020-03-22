<?php
	require'connection.php';

	$name = $_POST['name'];
	$email = $_POST['email'];
	$pass = $_POST['password'];
	$con_pass = $_POST['confirm_password'];

	if($pass != $con_pass){
		session_start();
		$_SESSION['error_msg'] = "Password and Confirm Password didn't match";
		header("Location:registration.php");
	}

	$sql ="SELECT * FROM users WHERE name='$name'";
	$result = $conn->query($sql);
	$rowcount =mysqli_num_rows($result);
	if($rowcount == 1){
		session_start();
		$_SESSION['error_msg'] = "This user name already Exist";
		header("Location:registration.php");
	}else{
		$sql = "INSERT INTO users VALUES (NULL,'$name','$email','$pass')";
		$result = $conn->query($sql);
		if($result){
			session_start();
			$_SESSION['reg_msg'] = "Registration Successfully Please login";
			header("Location:login.php");
		}
	}

	

?>