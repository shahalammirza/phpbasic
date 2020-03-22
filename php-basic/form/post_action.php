<?php
if($_POST){
	$name = $_POST['name'];
	$email = $_POST['email'];
	$gender = $_POST['gender'];
	

	echo "Your name is: $name"."<br>";
	echo "Your email is: $email"."<br>";
	echo "your gender is: $gender"."<br>";
	echo "your hobby is:"."<br>";
	foreach ($_POST['hobby'] as $value) {

		echo $value."<br>";
	}
}else{
	echo "go to home";
	header('Location: post_form.php');
}
	

?>