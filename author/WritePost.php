<?php include 'check1.php';       ?>
<?php  include '../assets/connect.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
    <!-- Twitter meta-->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:site" content="@pratikborsadiya">
    <meta property="twitter:creator" content="@pratikborsadiya">
    <!-- Open Graph Meta-->
    <meta property="og:type" content="website">
<<<<<<< HEAD
    <meta property="og:site_name" content="Vali Admin">
    <meta property="og:title" content="Vali - Free Bootstrap 4 admin theme">
=======
    <meta property="og:site_name" content="Mayankal">
    <meta property="og:title" content="Mayankal - Free Bloggin Community">
>>>>>>> 83a167a3e4e1c1b79927887cd63f19d8006822d4
    <meta property="og:url" content="http://pratikborsadiya.in/blog/vali-admin">
    <meta property="og:image" content="http://pratikborsadiya.in/blog/vali-admin/hero-social.png">
    <meta property="og:description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
    <title>Add Authors - Mayankal</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="../css/main.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <!-- Font-icon css-->
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <!--<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">-->
  <script type="text/javascript" src="../js/ckeditor/ckeditor.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


</head>
<<<<<<< HEAD
  <body class="app sidebar-mini">
    <!-- Navbar-->
    <?php   $id=$_SESSION['id'];

          $sql1="SELECT * FROM `author` WHERE `id`='$id'";
          $run=mysqli_query($conn,$sql1);
          $row=mysqli_fetch_assoc($run); 
          echo $row['profile_pic'];
          echo "akhil"
=======
  <body class="app sidebar-mini" style="overflow: hidden;">
    <!-- Navbar-->
    <?php  
          $id=$_SESSION['id'];
          $sql1="SELECT * FROM `author` WHERE `id`='$id'";
          $run=mysqli_query($conn,$sql1);
          $row=mysqli_fetch_assoc($run); 
>>>>>>> 83a167a3e4e1c1b79927887cd63f19d8006822d4
    ?>
    <?php include 'author_sidebar.php'; ?>
    <!-- for data of author -->
   
    <main class="app-content">
      <div class="app-title">
        <div>   
<<<<<<< HEAD
          <h1><i class='fa fa-edit' style='font-size:24px'></i> Write Post</h1>
=======
          <h1><i class='fa fa-edit' style='font-size:20px'></i> Write Post</h1>
>>>>>>> 83a167a3e4e1c1b79927887cd63f19d8006822d4
          <p>&nbsp &nbsp Give your best</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="WritePost.php">Write Post</a></li>
        </ul>
      </div>
<<<<<<< HEAD
    <!-- start -->
    <!-- <div class="fluid-container" style="margin-left: 200px; margin-right: 70px;" > -->
  <!-- <div style="margin-right:500px; margin-left:200px;"> -->
    <div class="row">
      <div class="col-lg-8" style="margin:-20px;">
=======
    <div class="row">
      <div class="col-lg-8">
>>>>>>> 83a167a3e4e1c1b79927887cd63f19d8006822d4
        <div class="form-group">
          <form action="../assets/write_post.php" method="POST">
          <h3>Title</h3>
          <input type="text" class="form-control" id="usr" placeholder="Enter the title" name="title">
          <hr>
            <textarea class="ckeditor" name="editor"></textarea><br> 
            <input type="hidden" name="order_id" value="<?php echo $or_id; ?>">
          <input type="hidden" name="customer" value="<?php echo $customer; ?>">
          <input type="submit" class="btn btn-primary" value="Submit" name="submit" style="width:833px;">
          </form>
        </div>
      </div>
      <!--  Right Side-->
      <div class="col-lg-1"></div>

    <div class="col-lg-3" style="margin-top: 35px;">
      <div class="panel-group" id="accordion">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">
            <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Category</a>
            </h4>
          </div>
          <div id="collapse1" class="panel-collapse collapse">
            <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </div>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">
            <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Order Id</a>
            </h4>
          </div>
          <div id="collapse2" class="panel-collapse collapse">
            <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </div>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">
            <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">No. of Words</a>
            </h4>
          </div>
          <div id="collapse3" class="panel-collapse collapse">
            <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
            </div>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">
            <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">Description</a>
            </h4>
          </div>
          <div id="collapse4" class="panel-collapse collapse">
            <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </div>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">
            <a data-toggle="collapse" data-parent="#accordion" href="#collapse5">Notes</a>
            </h4>
          </div>
          <div id="collapse5" class="panel-collapse collapse">
            <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </div>
          </div>
        </div>
<<<<<<< HEAD
        
        
        
  </div> 
</div>
 
 </div>
</div>
=======
      </div> 
    </div>
   </div>
  </div>
>>>>>>> 83a167a3e4e1c1b79927887cd63f19d8006822d4
<!-- End Right-side -->
  <!-- <?php 

  $sql = "SELECT * FROM orders WHERE `order_id`='$or_id'";
  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) > 0) {
      // output data of each row
      while($row = mysqli_fetch_assoc($result)) {
          ?>
          <p style="font-size: 20px;"><span style="font-size: 25px;"><b><u>Catagory</u></b> :</span> <?php echo strtoupper($row['post_cat']); ?></p>
          <p style="font-size: 20px;"><span style="font-size: 25px;"><b><u>Order Id</u></b> :</span> <?php echo $row['order_id']; ?></p>
          <p style="font-size: 20px;"><span style="font-size: 25px; color: red;"><b><u>Notes</u></b> :</span> <?php echo $row['imp_not']; ?></p>
          <p style="font-size: 20px;"><span style="font-size: 25px;"><b><u>No. of Words</u></b> :</span> <?php echo $row['min_word']; ?></p>
          <p style="font-size: 20px;"><span style="font-size: 25px;"><b><u>Description</u></b> :</span> <?php echo $row['descrip']; ?></p>
          <?php
<<<<<<< HEAD
      }
  } else {
      echo "0 results";
  }


   ?> -->
    
  <!-- </div> -->


=======
          }
      } else {
          echo "";
      }
    ?> -->
>>>>>>> 83a167a3e4e1c1b79927887cd63f19d8006822d4
  </div> 
    </main>
  
    <script src="../js/jquery-3.3.1.min.js"></script>
    <!-- Essential javascripts for application to work-->
  
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="../js/plugins/pace.min.js"></script>
    <!-- Page specific javascripts-->
    <!-- Google analytics script-->
    <script>
     $(document).ready(function(){
      // check change event of the text field
      $("#username").keyup(function(){
      // get text username text field value
      var username = $("#username").val();

      // check username name only if length is greater than or equal to 3
      if(username.length >= 3)
      {
      $("#status").html('<img src="../images/loader.gif" />Checking availability...');
      // check username
      $.post("../assets/checkuser.php", {username: username}, function(data, status){
      $("#status").html(data);
      });
      }
      });
      });
    </script>
    <script type="text/javascript">
      if(document.location.hostname == 'pratikborsadiya.in') {
      	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
      	ga('create', 'UA-72504830-1', 'auto');
      	ga('send', 'pageview');
      }
    </script>
  </body>
</html>
