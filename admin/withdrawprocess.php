<?php include '../assets/connect.php'; ?>
<?php include '..//assets/connect.php'; ?>
<?php
    $uid=$_GET['uid'];
    if(isset($uid)){
        $sql="SELECT * FROM `withdraw` WHERE `uid`='$uid'";
        $run=mysqli_query($conn,$sql);
        $result=mysqli_fetch_assoc($run);
        // update in withdraw_secondary table 
        $uid=$result['uid'];
        $name=$result['name'];
        $ifsc_code=$result['ifsc_code'];
        $bank=$result['bank_acc'];
        $mobile=$result['mobile_no'];
        $mode=$result['mode'];
        $money=$result['money'];
        $date=date("Y/m/d");
        $sql1="INSERT INTO `withdraw_secondary`(`uid`, `name`, `ifsc_code`, `bank_acc`, `mobile_no`, `mode`, `money`,`date`) VALUES ('$uid','$name','$ifsc_code','$bank','$mobile','$mode','$money','$date')";
        mysqli_query($conn,$sql1);
         // delete data from withdraw table after payment is done
   
        $sql2="DELETE FROM `withdraw`  WHERE `uid`='$uid' order by 'uid' DESC limit 1";
       if(mysqli_query($conn,$sql2)){
        ?>
        <script>
            alert('Payment Completed');
            window.location = "withdraw.php";
        </script>
        <?php
       }else{
        ?>
        <script>
            alert('some problem occur');
            window.location = "withdraw.php";
        </script>
        <?php
       }
    }else{
        ?>
        <script>
            alert('Some problem Occur');
        </script>
        <?php
    }


?>