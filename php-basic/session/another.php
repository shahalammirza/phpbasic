<?php
	session_start();
	if(!isset($_SEESION['place'])){
		header('Location:catch_session.php');
	}

?>