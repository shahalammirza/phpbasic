<?php
$conn = new mysqli('localhost','root','','customers');
$sql = "DELETE FROM valvee where id = 10";
if($conn->query($sql)){
	echo "successfully delete";
}else{
	echo "not deleted";
}