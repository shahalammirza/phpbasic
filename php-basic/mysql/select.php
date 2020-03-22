<?php
	$conn = new mysqli('localhost','root','','customers');
	$sql = "SELECT * FROM valvee";
	$result = $conn->query($sql);
	while ($row = $result->fetch_assoc()) {
		echo $row['id'] .'Name = '. $row['firstName'].'<br>';
	}


?>