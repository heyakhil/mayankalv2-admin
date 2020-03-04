<?php
    function getUserDetail($uid)
    {
    include 'connect.php';
     $sql1 = "SELECT * FROM user WHERE `unique_id`='$uid'";
     $result = mysqli_query($conn, $sql1);

    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
            return $row;
        }
    } else {
        echo " 0 results";
    }
    }

?>