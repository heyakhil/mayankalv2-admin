<?php include '../assets/connect.php'; ?>
<?php include 'check1.php'; error_reporting(0); ?>
<?php 
        session_start();
        $uid=$_SESSION['id'];
        $sql1="SELECT * FROM `author` WHERE `id`='$uid'";
        $run=mysqli_query($conn,$sql1);
        $row=mysqli_fetch_assoc($run);
		$uid1=$row['auth_id'];
		$_SESSION['auth_uid']= $uid1;
        $name=$row['name'];
        $date=date("y/m/d");

	$sql="SELECT * FROM `auther_coins_earn` WHERE `author_uid`='$uid1'";
	$run=mysqli_query($conn,$sql);
	$result=mysqli_fetch_assoc($run);
	$rs=$result['coin_earn']/100;
	//hello
		
	if (isset($_POST['num']) && isset($_GET['mobdata'])) {
		if($rs >= 20){
			$number=$_POST['mno'];
			$ifsc=0;
			$bank=0;
            
			$mode = $_POST['select1'];
			if($mode == '1'){
				$mode="G Pay";
			}elseif ($mode == '2') {
				$mode="Paytm";
			}else{
				$mode="PhonePay";
			}
			$sql="INSERT INTO `withdraw`( `uid`, `name`, `ifsc_code`, `bank_acc`, `mobile_no`,`mode`,`money`) VALUES('$uid1','$name','$ifsc','$bank','$number','$mode','$rs')";
			$run=mysqli_query($conn,$sql);
			// update coins 
			$sql2="UPDATE `auther_coins_earn` SET `coin_earn`='0',`Datess`='$date' WHERE `author_uid`='$uid1'";
			mysqli_query($conn,$sql2);
			?>
			<script>
						alert("Your Money will be Transfered in 24Hrs");
						window.location.replace("withdraw.php");
			</script>
			<?php
		}else{
			?>
				<script type="text/javascript">
					alert("You can Transfer Minimum 20rs");
					window.location.replace("withdraw.php");
				</script>

			<?php

		}
	
	
	}else
		
		{
		  if (isset($_POST['submit']) && isset($_GET['bank'])) {
			if ($rs >= 50) {
			
			$acno=$_POST['acno'];
			$ifsc=$_POST['ifsccode'];
			$name=$_POST['name'];
			$mode="BankAccount";
			$sql="INSERT INTO `withdraw`(`uid`, `name`, `ifsc_code`, `bank_acc`, `mobile_no`, `mode`,`money`) VALUES ('$uid1','$name','$ifsc','$acno','0','$mode','$rs')";
			
			$run=mysqli_query($conn,$sql);
	
		// update the coins
			$sql="UPDATE `auther_coins_earn` SET `coin_earn`='0',`Datess`='$date' WHERE `author_uid`='$uid1'";
			mysqli_query($conn,$sql);
	
			header('location:withdraw.php');
		}
		else{
			?>
				<script type="text/javascript">
					alert("You can Transfer Minimum 50rs");
					window.location.replace("withdraw.php");
				</script>

			<?php
		}
	
		}
	}
	

		
 ?>