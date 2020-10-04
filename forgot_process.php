<?php
    include('assets/connect.php');
    if(isset($_POST['submit'])){
        $email=$_POST['email'];
        $newpassword=md5($_POST['newpassword']);
        $confirmpassword=md5($_POST['confirmpassword']);
        $sql="SELECT * FROM `author` WHERE `email`='$email'";
        $run=mysqli_query($conn,$sql);
        if(mysqli_num_rows($run) > 0){
            if($newpassword === $confirmpassword){
            $sql1="UPDATE `author` SET `password`='$newpassword' WHERE `email`='$email'";
            if(mysqli_query($conn,$sql1)){
                ?>
                <script>
                    alert('Password is changed');
                    window.location = "index.php";
                </script>
            <?php 
            }else{
                ?>
                <script>
                    alert('Some problem is occur');
                    window.location = "index.php";
                </script>
            <?php 
            }
            }else{
                ?>
                <script>
                    alert('Enter Same password');
                    window.location = "index.php";
                </script>
            <?php
            }
        }else{
            ?>
                <script>
                    alert('Enter valid email addres');
                    window.location = "index.php";
                </script>
            <?php
        }
    }else{
        header('location:index.php');
    }

?>