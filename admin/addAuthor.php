<?php  error_reporting(0); ?>
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
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body class="app sidebar-mini">
    <!-- Navbar-->
    <?php include '../assets/admin_sidebar.php'; ?>
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-dashboard"></i> Add The Authors</h1>
          <p>Start a beautiful journey here</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="#">Blank Page</a></li>
        </ul>
      </div>
  
      <div class="row">
        <div class="col-md-6">
          <div class="tile">
            <h3 class="tile-title">Authors Registration</h3>
            <div class="tile-body">
              <form action="authoprocess.php" method="post">
                <div class="form-group">
                  <label class="control-label">Name</label>
                  <input class="form-control" type="text" name="name"  placeholder="Enter full name" required>
                </div>
                <div class="form-group">
                  <label class="control-label">Email</label>
                  <input class="form-control" type="email" name="email" placeholder="Enter email address" required>
                </div>
                <div class="form-group">
                  <label class="control-label">Username</label>
                  <input class="form-control" type="text" placeholder="Enter username" id="username" name="username"  autocomplete="off" required>
                  <div id="status"></div>
                </div>
                
                <div class="form-group">
                  <label class="control-label">Password</label>
                  <input class="form-control" type="password" name="pwd" placeholder="Enter Password" required>
                </div>
                <div class="form-group">
                  <label class="control-label" name="gender">Gender</label>
                  <div class="form-check">
                    <label class="form-check-label" required>
                      <input class="form-check-input" type="radio" name="gender" value="Male">Male
                    </label>
                  </div>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="form-check-input" type="radio" name="gender" value="Female">Female
                    </label>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label">Mobile Number</label>
                  <input class="form-control" type="number" name="number" placeholder="Enter Mobile Number" required>
                </div>
                <div class="form-group">
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="form-check-input" type="checkbox" required>I accept the terms and conditions
                    </label>
                  </div>
                </div>
                <div class="tile-footer">
                   
                    <button class="btn btn-primary" name="submit" type="submit" ><i class="fa fa-fw fa-lg fa-check-circle"></i>Register</button>
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
