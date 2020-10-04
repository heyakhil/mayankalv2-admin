<?php  
    include('../assets/connect.php');
    if(isset($_GET['uid'])){
        $reviewid=$_GET['uid'];
        $sql="UPDATE `mayankalreview` SET `status`=1 WHERE `reviewid`='$reviewid'";
        if(mysqli_query($conn,$sql)){
            ?>
                <script>
                    alert("Review Approved");
                    window.location="feedback.php";
                </script>
            <?php
        }
    }



?>