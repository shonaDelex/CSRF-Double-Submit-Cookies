<?php
	session_start(); 
	if((!isset($_SESSION["success"])))
	{
		header("location:login.php");
		exit();
	}
	if(isset($_POST['csrf']) && isset($_COOKIE['csrf_token'])){
		if($_POST['csrf'] == $_COOKIE['csrf_token']){
			echo "Logout Success";
			session_destroy();
		}
		else{
			echo "csrf Check Failed";
		}
	}
	
?>