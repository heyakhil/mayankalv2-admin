<?php include '../assets/connect.php'; ?>
<?php  session_start();
        $id=$_SESSION['id'];
        $name=$_POST['name'];
        $email=$_POST['email'];
        $username=$_POST['username'];
        $mobile=$_POST['mobile'];
        $skills=$_POST['skill'].",";
        $expert=$_POST['expert'];
        $about=$_POST['about'];
        $sql="UPDATE `author` SET `name`='$name',`email`='$email',`username`='$username',`mobile`='$mobile' WHERE `id`='$id'";
        $run=mysqli_query($conn,$sql);

        if ($skills || $expert || $about) {
          $sql = "UPDATE author SET `skills`='$skills', `experties`='$email', `about`='$about' WHERE id='$id'";
            if (mysqli_query($conn, $sql)) {
                ?>
                  <script>  
                      alert("Your Profile is updates");
                      window.location.replace("profile.php");
                  </script>
                <?php
            } else {
                echo "Error updating record: " . mysqli_error($conn);
            }
        }

        if (basename($_FILES['image']['name'])) {
            $img=basename($_FILES['image']['name']);
            $tempname=$_FILES['image']['tmp_name'];
            move_uploaded_file($tempname,"../images/$img");
                $sql = "UPDATE `author` SET `profile_pic`='$img' WHERE `auth_id`='$id'";

                if (mysqli_query($conn, $sql)) {
                    ?>
                      <script>  
                          alert("Your Profile Pic is updated");
                          window.location.replace("profile.php");
                      </script>
                    <?php
                } else {
                    echo "Error updating record: " . mysqli_error($conn);
                }
          }
        ?>
           <script>  
                  alert("Your Data is updated");
                  window.location.replace("profile.php");
           </script>
          <?php

          ?>
                     
     
                    
                    
          
        
        
       
        
    
    
        
  

