<?php include '../assets/connect.php';   ?>
<?php include '../check.php'; error_reporting(0); ?>
<?php
   if(isset($_POST['submit'])){
        $name=$_POST['name'];
        $email=$_POST['email'];
        $username=$_POST['username'];
        $password=md5($_POST['pwd']);
        $gender=$_POST['gender'];
        $mobilenum=$_POST['number'];
        $date=date("y");
        $randum=rand(23456784,91237487);
        $auth_id="auth".$date.$randum;



        $sql="INSERT INTO `author`(`name`, `email`, `username`, `password`, `gender`, `mobile`, `auth_id`) VALUES ('$name','$email','$username','$password','$gender','$mobilenum','$auth_id')";
        if(mysqli_query($conn,$sql)){
            ?>
            <script>
                alert('Author added');
                window.location = "addAuthor.php";
            </script>
        <?php
        }else{
            ?>
            <script>
                alert('Some problem occur');
                window.location = "addAuthor.php";
            </script>
        <?php
        }
    }else{
        ?>
        <script>
            alert('Some problem occur');
            window.location = "../index.php";
        </script>
    <?php
    }
?>