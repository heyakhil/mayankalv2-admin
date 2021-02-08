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
    <meta property="og:site_name" content="Vali Admin">
    <meta property="og:title" content="Vali - Free Bootstrap 4 admin theme">
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
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body class="app sidebar-mini">
    <!-- Navbar-->
    <?php include 'author_sidebar.php'; ?>
    <!-- for data of author -->
    <?php  echo $id=$_SESSION['id'];

        $sql1="SELECT * FROM `author` WHERE `auth_id`='$id'";
        $run=mysqli_query($conn,$sql1);
       $row=mysqli_fetch_assoc($run);
          echo $row['profile_pic'];
          echo $row['email'];
?>
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-cog fa-lg"></i> Settings </h1>
          <p>Start a beautiful journey here</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="#">Add Author</a></li>
        </ul>
      </div>
  
      <div class="row">
        <div class="col-md-8" style="margin-left:12%;">
          <div class="tile">
            <h3 class="tile-title">Update Information</h3>
            <div class="tile-body">
              <form action="authoprocess.php" method="post" enctype="multipart/form-data">
                <div><img src="../images/<?php echo $row['profile_pic']; ?>" style="height:100px;width:100px;margin-left:85%;"></div>
                <div class="form-group">
                  <label class="control-label">Name</label>
                  <input class="form-control" type="text" name="name" value="<?php echo $row['name']; ?>">
                </div>
                <div class="form-group">
                  <label class="control-label">Email</label>
                  <input class="form-control" type="email" name="email" value="<?php echo $row['email']; ?>">
                </div>
                <div class="form-group">
                  <label class="control-label">Username</label>
                  <input class="form-control" type="text" id="username" value="<?php echo $row['username']; ?>" name="username"  autocomplete="off" >
                  <div id="status"></div>
                </div>
                <div class="form-group">
                  <label class="control-label">Mobile Number</label>
                  <input class="form-control" type="text" id="username" name="mobile" value="<?php echo $row['mobile']; ?>" autocomplete="off"  >
                  <div id="status"></div>
                 
                </div>
                <div class="form-group">
                  <label class="control-label">Skills</label>
                  <input class="form-control" type="text" value="<?php echo $row['skills']; ?>" name="skill" >
                </div>
                <div class="form-group">
                  <label class="control-label">Expert In:</label>
                  <input class="form-control" type="text" value="<?php echo $row['experties']; ?>" name="expert" >
                </div>
                <div class="form-group">
                  <label class="control-label">About :</label>
                  <input class="form-control" type="text" value="<?php echo $row['about']; ?>" name="about" >
                </div>
                <div class="tile-footer">
                  <input type="file"  name="image" value="<?php echo $row['profile_pic'];?>">
                </div>
                <div class="tile-footer">
                    <button class="btn btn-primary" type="submit" ><i class="fa fa-fw fa-lg fa-check-circle"></i>Save Changes</button>
                </div>
              </form>
            </div>
           
          </div>
        </div>
        </div>
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
