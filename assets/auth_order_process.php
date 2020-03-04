<?php 
include 'connect.php';
include 'getDetail.php';
if(isset($_POST['submit'])){
    $title = strip_tags($_POST['title']);
    $post = strip_tags($_POST['editor']);
    $order_id =strip_tags($_COOKIE['order-id']);

    $sql = "SELECT * FROM author_orders WHERE `order_id`='$order_id'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
            $orderof_user = $row['orderof_uid'];
        }
    } else {
        echo "0 results";
    }

    if(empty($title) || empty($post) || empty($order_id)){
        header('Location: ../author/WritePost.php');
    }else{
    	$naam = getUserDetail($orderof_user)['name'];
    	$product = date("Ymdhis").rand(1, 60);
        $sql = "INSERT INTO `author_order_complete`(`name`, `product_id`, `uid`, `orderof_uid`, `title`, `post`, `date`)
         VALUES ('$naam','$product',[value-3],[value-4],[value-5],[value-6],[value-7],[value-8])";

        if (mysqli_query($conn, $sql)) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }

        mysqli_close($conn);
    }
}




?>