<?php 
    include('../assets/connect.php');
    if(isset($_POST['submit'])){
        $username=$_POST['username'];
        $mobile_no=$_POST['mobilenumber'];
        $position=strtoupper($_POST['position']);
        $password=md5($_POST['pwd']);
        $admin_id='admin'.rand();
        $sql="INSERT INTO `admin_log`(`user`, `admin_id`, `password`, `mobile_num`, `position`) VALUES ('$username','$admin_id','$password','$mobile_no','$position')";
        if(mysqli_query($conn,$sql)){
            ?>
                <script>
                    alert("Registration is successfully");
                    window.location = "create_admin.php";
                </script>
            <?php
        }else{
            ?>
                <script>
                    alert("Registration failed ! Some problem occur");
                    window.location = "create_admin.php";
                </script>
            <?php
        }
    }

?>