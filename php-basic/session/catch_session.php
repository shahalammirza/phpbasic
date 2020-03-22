<?php
session_start();
	if(isset($_SESSION['place'])){
		echo $_SESSION['place'];
	}else{
		echo "set session";
	}
?>