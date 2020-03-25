<?php include("../assets/connect.php");
    if(!isset($_GET['email'])){
        header("location:email_to_author.php");
      }
?>

<?php
    if(isset($_POST['submit'])){
        $email=$_POST['email'];
        $name=$_POST['name'];
        $sub=$_POST['subject'];
        $body=$_POST['body'];
        $from="team@mayankal.ml";
        $headers = "From: ".$from."\r\n";
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Reply-To: <team@mayankal.ml>\r\n";
        $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
        $headers .= "Return-Path:<team@mayankal.ml>\r\n";
        $headers .= "X-Priority: 3\r\n";
        $headers .= "X-Mailer: PHP". phpversion() ."\r\n";
        $message="Hello, ".$name."<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$body."";
        if(mail($email,$sub,$message,$headers)){
            ?>
        <script>
                alert("Email is send to the user");
                window.open("email_to_author.php", "_self");
        </script>
    <?php 
    }
    else{
        ?>
        <script>
                alert("Some problem occur? Try Again");
                window.open("sendmail_process.php?email=<?php echo $email; ?>&name=<?php echo $name; ?>", "_self");
        </script>
    <?php 

    }   
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" >
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

    <title>send mail-Mayankal Dashboard</title>
    <style>
        *{
           margin: 0;
           padding: 0;
        }
        .container{
            width:600px;
            height: 650px;
            background-color: cadetblue;
            border-radius: 1%; 
            margin-top: 30px;
        }
        form{
            margin-top: 30px;
            font-family:cursive;
            font-size: large;
            font-weight: 100;
        }
        .btn{
            width:570px;
            height: 50px;
        }
        
       
    </style>
</head>
<body>
    <div class="container">
                <form class="form-group" method="post" action="">
                    <label style="margin-top: 3%;">Name</label>
                    <input type="text" class="form-control" name="name" value="<?php echo $_GET['name']; ?>" required><br>
                    <label>Email Id</label>
                    <input type="text"  class="form-control" name="email" value="<?php echo $_GET['email']; ?>" required><br>
                    <label>Subject</label>
                    <input type="text"  class="form-control" name="subject" placeholder="Subject" required><br>
                    <label>Message</label>
                    <textarea  class="form-control"  rows="7" name="body" placeholder="Write something here....." required></textarea><br>
                    <button type="submit" class="btn btn-success" name="submit" >Submit</button>
                </form>
    </div>
</body>
</html>