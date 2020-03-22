<?php
$conn = new mysqli('localhost','root','','customers');
$firstName= "Abdul kader";
$lastName = "Abdur rahman";
$email = "Abdusl@gmail.com";
$address= "house10";
$city = "nowakhali";
$sql = "INSERT INTO valvee VALUES (NULL,'$firstName','$lastName','$email','$address','$city')";
if($conn->query($sql)){
	echo "Insert successfully";
}