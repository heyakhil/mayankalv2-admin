<?php  include '../assets/connect.php'; ?>
<?php  
    include 'check1.php';
    error_reporting(0);
    $orderid=$_GET['orderid'];
    $title= mysqli_real_escape_string($conn,$_POST['title']);
    $post= mysqli_real_escape_string($conn,$_POST['editor']);
    $year=date("Y");
    $date= date("d");
    $random=rand(111111,999999);
    $product_id=$date."-".$random.$year;
    $name=$_SESSION['user'];
    // for id of user
    $sql="SELECT * FROM `author_orders` WHERE `order_id`='$orderid'";
    $run=mysqli_query($conn,$sql);
    $result=mysqli_fetch_assoc($run);
    $uidof_user=$result['orderof_uid'];
    $author_uid=$result['auth_uid'];
    $date1=date("y/m/d");
    if(isset($_POST['submit'])){
        
        $sql="INSERT INTO `author_order_complete`(`name`, `product_id`, `uid`, `orderof_uid`, `title`, `post`, `date`) VALUES ('$name','$product_id','$author_uid','$uidof_user','$title','$post','$date1')";
        mysqli_query($conn,$sql);
        // notification for user who ordered
        $msg="Your Order is Completed";
        $sql1="INSERT INTO `notification`( `uid`, `notify`, `send_by`) VALUES ('$uidof_user','$msg','$author_uid')";
        mysqli_query($conn,$sql1);
        //coin update in author profile
        $sql3="SELECT * FROM `auther_coins_earn` WHERE `author_uid`='$author_uid'";
        $run=mysqli_query($conn,$sql3);
        $row=mysqli_fetch_assoc($run);
        $coin=$row['coin_earn']+150;
        $sql2="UPDATE `auther_coins_earn` SET `author_uid`='$author_uid',`coin_earn`='$coin',`Datess`='$date1' WHERE `author_uid`='$author_uid'";
        mysqli_query($conn,$sql2);
        //for mail to the user
        $sql4="SELECT * FROM `user` WHERE `unique_id`='$uidof_user'";
        $run=mysqli_query($conn,$sql4);
        $raw=mysqli_fetch_assoc($run);

        $to = $raw['email'];
        $subject = 'Order Complition Mail';
        $message = 'Your Order will be completed';
        $from = "From:<b>Mayankal Team</b><team@mayankal.ml>";
        mail($to,$subject,$message,$from);
        // delete order from order table
        $sql5="DELETE FROM `author_orders` WHERE `order_id`='$orderid'";
        mysqli_query($conn,$sql5);

        header('location:orders.php');
        
    
    }

?>