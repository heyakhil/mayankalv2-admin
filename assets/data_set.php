<?php 
	session_start();
	if($_SESSION['name'] != "" && $_SESSION['id'] != "" && $_SESSION['status'] != ""){ //checking for the admin who login
		$name = $_SESSION['name'];
		$uid = $_SESSION['id'];
		$status =  $_SESSION['status'];
	}else if($_SESSION['user'] != "" && $_SESSION['id'] != "" && $_SESSION['status'] != "") { //checking for the author who login
		$user = $_SESSION['user'];
		$uid = $_SESSION['id'];
		$status =  $_SESSION['status'];
	}else{
		header("location:../index.php");
	}


 ?>