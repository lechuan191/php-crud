<?php 
	session_start();
	include 'config.php';
	if($conn){
		// echo ket noi thanh cong;
	}
	else{
		header("Location:config.php");
	}

	if(!$_SESSION['username'])
	{
		header('Location:login.php');
	}

 ?>