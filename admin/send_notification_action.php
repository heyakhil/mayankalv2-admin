<?php include('../assets/connect.php'); ?>
<?php if(!isset($_GET['email'])){
    header("location:send_notification.php");
} 
    if(isset($_POST['submit'])){
        $admin_id=$_POST['admin_id'];
        $uid=$_POST['uid'];
        $notification=$_POST['notification'];
        $sql1="INSERT INTO `notification`(`uid`, `notify`, `send_by`) VALUES ('$uid','$notification','$admin_id')";
        if(mysqli_query($conn,$sql1)){
            ?>
                <script>
                    alert("Notification will be send to the user");
                    window.location = "send_notification.php";
                </script>
            <?php
        }else{
            ?>
                <script>
                    alert("Some problem occur");
                    window.location = "send_notification_action.php?email=<?php echo $_POST['email']; ?>";
                </script>
            <?php
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" >
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

    <title>Send Notification-Mayankal Dashboard</title>
    <style>
        *{
           margin: 0;
           padding: 0;
        }
        .container{
            width:600px;
            height: 650px;
            background-color: cadetblue;
            border-radius: 1%; 
            margin-top: 30px;
        }
        form{
            margin-top: 30px;
            font-family:cursive;
            font-size: large;
            font-weight: 100;
        }
        .btn{
            width:570px;
            height: 50px;
        }
        
       
    </style>
</head>
<?php   
    $sql="select * from admin_log where `user`='heyakhil'";
    $result=mysqli_query($conn,$sql);
    if(mysqli_num_rows($result) > 0){
        $row=mysqli_fetch_assoc($result);
    }


?>
<body>
    <div class="container">
                <form class="form-group" method="post" action="">
                    <label style="margin-top: 3%;">Admin Id</label>
                    <input type="text" class="form-control" value="<?php echo $row['admin_id']; ?>" name="admin_id" required>
                    <label style="margin-top: 3%;">Uid</label>
                    <input type="text" class="form-control" value="<?php echo $_GET['uid']; ?>" name="uid" required><br>
                    <label>Email Id</label>
                    <input type="text"  class="form-control" value="<?php echo $_GET['email']; ?>" name="email" required><br>
                    <label>Notification</label>
                    <textarea  class="form-control"  rows="7" name="notification" placeholder="Write something here....." required></textarea><br>
                    <button type="submit" class="btn btn-success" name="submit" >Submit</button>
                </form>
    </div>
</body>
</html>