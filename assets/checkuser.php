<?php include '../check.php'; ?>
<?php
if(isset($_POST['username']))
{
	// include Database connection file 
	include("../assets/connect.php");
 
	$username = mysqli_real_escape_string($conn, $_POST['username']);
 
	$query = "SELECT username FROM author WHERE username = '$username'";
	if(!$result = mysqli_query($conn, $query))
	{
		exit(mysqli_error($conn));
	}
 
	if(mysqli_num_rows($result) > 0)
	{
		// username is already exist 
		echo '<div style="color: red;"> <b>'.$username.'</b> is already in use! </div>';
	}
	else
	{
		// username is avaialable to use.
		echo '<div style="color: green;"> <b>'.$username.'</b> is avaialable! </div>';
	}
}
?>