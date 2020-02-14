<?php
      session_start();
      $q=0;
      if($_SESSION['status']=="author10052"){
              $q=1;
      }
	if($q==1){
	      
	header('location:../index.php');

	}



    

?>