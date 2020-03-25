<?php 
    include('../assets/connect.php');
    if(isset($_GET['webuid'])){
        $webuid=$_GET['webuid'];
        $sql1="SELECT * FROM `web_info` where `web_uid`='$webuid'";
        $result=mysqli_query($conn,$sql1);
        if(mysqli_num_rows($result) > 0){
            while($row=mysqli_fetch_assoc($result)){
                $name=$row['web_name'];
                $web_link=$row['web_link'];
                $web_trafic=$row['web_traffic'];
                $post=$row['web_post'];
                $da=$row['da'];
                $pa=$row['pa'];
                $catagory=$row['catagory'];
                $niche=$row['niche'];
                $mpoint=$row['mpoint'];
                $code=$row['securecode'];
                $date=$row['date'];
                $sql="INSERT INTO `verified_web_info`(`web_uid`, `web_name`, `web_link`, `web_traffic`, `web_post`, `da`, `pa`, `catagory`, `niche`, `mpoint`, `securecode`, `date`) VALUES ('$webuid','$name','$web_link','$web_trafic','$post','$da','$pa','$catagory','$niche','$mpoint','$code','$date')";
                if(mysqli_query($conn,$sql)){
                    ?>
                        <script>
                            alert("Website is Verified");
                            window.location="web_info.php";
                        </script>
                    <?php
                }
            }
        }
    }
    if(isset($_GET['web_id']) && $_GET['status']=="Not Verified"){
        $uid=$_GET['web_id'];
        $sql="DELETE FROM `web_info` WHERE `web_uid`='$uid'";
        if(mysqli_query($conn,$sql)){
        ?>
        <script>
            alert("Website is deleted");
            window.location="web_info.php";
        </script>
        <?php
        }
    }else{
        ?>
            <script>
                alert("Website is Verified.You Can't delete");
                window.location="web_info.php";
            </script>
        <?php
    }


?>