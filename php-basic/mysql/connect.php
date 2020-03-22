<?php

	$conn = new mysqli('localhost','root','','customers');
	if($conn){
		echo "Done";
	}
?>