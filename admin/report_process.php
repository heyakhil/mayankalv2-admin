<?php 
    include('../assets/connect.php');
    if(isset($_GET['uid'])){
        $uid=$_GET['uid'];
        // delete the data from bookmark table
        $sql="DELETE FROM `bookmark` WHERE `book_uid`='$uid' OR `book_user`='$uid'";
        if(mysqli_query($conn,$sql)){
            // delete the data from coin earn table
            $sql1="DELETE FROM `coins_earn` WHERE `uid`='$uid'";
            if(mysqli_query($conn,$sql1)){
                // delete the data from notification table
                $sql2="DELETE FROM `notification` WHERE `uid`='$uid'";
                if(mysqli_query($conn,$sql2)){
                    // delete the data from user table
                        $sql4="DELETE FROM `user` WHERE `unique_id`='$uid'";
                        if(mysqli_query($conn,$sql4)){
                            // delete the data from user_info table
                            $sql5="DELETE FROM `user_info` WHERE `uid`='$uid'";
                            if(mysqli_query($conn,$sql5)){
                                // delete the data from visitors table
                                $sql6="DELETE FROM `visitor` WHERE `visitor_uid`='$uid'";
                                if(mysqli_query($conn,$sql6)){
                                    // delete the data from web_info table
                                    $sql7="DELETE FROM `web_info` WHERE `web_uid`='$uid'";
                                    if(mysqli_query($conn,$sql7)){
                                        // delete the data from withdraw table
                                        $sql8="DELETE FROM `withdraw` WHERE `uid`='$uid'";
                                        if(mysqli_query($conn,$sql8)){
                                            // delete the data from report table
                                            $sql9="DELETE FROM `report` WHERE `report_uid`='$uid'";
                                            if(mysqli_query($conn,$sql9)){
                                            ?>
                                                <script>
                                                    alert("Account is deleted");
                                                    window.location="userreported.php";
                                                </script>
                                            <?php
                                            }else{
                                            ?>
                                                <script>
                                                    alert("Some problem occur1");
                                                    window.location="userreported.php";
                                                </script>
                                            <?php
                                            }
                                        }else{
                                        ?>
                                            <script>
                                                alert("Some problem occur1");
                                                window.location="userreported.php";
                                            </script>
                                        <?php
                                        }
                                    }else{
                                    ?>
                                        <script>
                                            alert("Some problem occur2");
                                            window.location="userreported.php";
                                        </script>
                                    <?php
                                    }
                                }else{
                                ?>
                                    <script>
                                        alert("Some problem occur3");
                                        window.location="userreported.php";
                                    </script>
                                <?php
                                }
                            }else{
                            ?>
                                <script>
                                    alert("Some problem occur4");
                                    window.location="userreported.php";
                                </script>
                            <?php
                            }
                        }else{
                        ?>
                            <script>
                                alert("Some problem occur5");
                                window.location="userreported.php";
                            </script>
                        <?php
                        }
                    }else{
                        ?>
                        <script>
                            alert("Some problem occur6");
                            window.location="userreported.php";
                        </script>
                        <?php
                    }
            }else{
              ?>
                <script>
                    alert("Some problem occur8");
                    window.location="userreported.php";
                </script>
              <?php

            }
        }else{
        ?>
            <script>
                alert("Some problem occur9");
                window.location="userreported.php";
            </script>
        <?php

        }
    }else{
        ?>
            <script>
                alert("Some problem occur10");
                window.location="userreported.php";
            </script>
        <?php

    } 





?>