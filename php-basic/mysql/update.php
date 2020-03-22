<?php
$conn = new mysqli('localhost','root','','customers');
$sql = "UPDATE  valvee SET firstName = 'MOjnu' WHERE id=9";
$result = $conn->query($sql);
if($result){
	echo "update successfully";
}else {
	echo "not update";
	}