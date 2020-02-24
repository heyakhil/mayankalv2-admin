<?php
	//security check so that author could not go to the admin page without the permission
      session_start();
      $q=0;
      if($_SESSION['status']=="author10052"){
        $q=1;
      }
	if($q==1){
	      
	header('location:../index.php');

	}



    

?>