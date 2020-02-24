<?php include 'connect.php'; ?>

<?php 
	
	session_start();
	if (isset($_POST['submit'])) {
		$user = $_POST['username'];
		$pas = md5($_POST['password']);
		$q=0;
		$sql = "SELECT * FROM admin_log WHERE `user`='$user' AND `password`='$pas'";
		$result = mysqli_query($conn, $sql);

		if ($row=mysqli_num_rows($result) > 0) {
		    // output data of each row
		   	$_SESSION['name'] = $user;
		   	$_SESSION['id'] = $row['id'];
			$_SESSION['status'] = "admin10052"; //fixed random id of the admin for the login security
			$q=1; 
			
		   	header("location:../admin/index.php");
		} else{
				$sql="SELECT * FROM `author` WHERE `username`='$user' AND `password`='$pas'";
				$run=mysqli_query($conn,$sql);
				if($row=mysqli_fetch_assoc($run)){
					$_SESSION['user']=$user;
					$_SESSION['id']=$row['id'];
					$_SESSION['status']="author10052"; //fixed random id of the author for the login security
					header('location:../author/index.php');
					$q=1;
					
				}
		    if($q==0){
				?>
						<script>

  								alert("Username and Password is wrong");
								location.replace("../index.php");
						</script>

				<?php
				
			}
		 
		}

		mysqli_close($conn);


	}



 ?>