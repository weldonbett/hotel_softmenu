<?php
	
	//Start session
	session_start();
	
	//Unset the variables stored in session
	unset($_SESSION['username']);

	header('Location: index.php');
	exit;
?>

