<?php 
    include('assets/connect.php');
    if(isset($_POST['email'])){
        $email = $_POST['email'];
        $sql =  "select * from author where `email` = '$email'";
        $run = mysqli_query($conn , $sql);
        if(mysqli_num_rows($run) > 0){
            $verification_number = rand();
            $row = mysqli_fetch_assoc($run);
            $name = $row['name'];
            $sub = 'this is sumit';
            $from="team@mayankal.ml";
            $headers = "From: ".$from."\r\n";
            $headers .= "MIME-Version: 1.0\r\n";
            $headers .= "Reply-To: <team@mayankal.ml>\r\n";
            $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
            $headers .= "Return-Path:<team@mayankal.ml>\r\n";
            $headers .= "X-Priority: 3\r\n";
            $headers .= "X-Mailer: PHP". phpversion() ."\r\n";
            $message="Hello, ".$name."<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Your Verification code is".$verification_number;
            // echo "1";
            if(mail($email,$sub,$message,$headers)){
                $sql1 = "update author set `verification_forgot_password` = '$verification_number' where `email` = '$email'";
                if(mysqli_query($conn , $sql1)){
                       echo "1";
                }else{
                    echo '0';
                }
            }
            else{
               echo "email not send";
            } 
        }else{
            echo 'Enter registered Email';
        }
    }

    if(isset($_POST['otp'])){
        $otp = $_POST['otp'];
        $email = $_POST['user_email'];
        $sql = "select * from author where `email` = '$email' and `verification_forgot_password` = '$otp'";
        if(mysqli_query($conn , $sql)){
            echo '1';
        }else{
            echo '0';
        }
    }
    if(isset($_POST['new_password']) && isset($_POST['cnf_password']) && $_POST['user_verify_email']){
        $new_password = $_POST['new_password'];
        $cnf_password = $_POST['cnf_password'];
        $email = $_POST['user_verify_email'];
        if($new_password === $cnf_password){
            $password = md5($new_password);
            $sql = "update author set `password` = '$password' where `email` = '$email'";
            if(mysqli_query($conn , $sql)){
                echo '1';
            }else{
                echo '0';
            }
        }
    }




?>