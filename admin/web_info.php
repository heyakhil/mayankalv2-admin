<?php include '../assets/connect.php'; ?>
<?php include '../check.php'; error_reporting(0); ?>
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
    <title>Website Information - Mayankal Dashboard</title>
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
    <!-- Sidebar menu-->
    <!-- users details -->
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-th-list"></i> Data Table</h1>
          <p>Table to display analytical data effectively</p>
        </div>
        <ul class="app-breadcrumb breadcrumb side">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">Tables</li>
          <li class="breadcrumb-item active"><a href="#">Data Table</a></li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              <div class="table-responsive">
                <table class="table table-hover table-bordered" id="sampleTable">
                  <thead>
                    <tr>
                      <th>UID</th>
                      <th>WEBSITE NAME</th>
                      <th>TRAFFIC</th>
                      <th>POST</th>
                      <th>DA</th>
                      <th>PA</th>
                      <th>CATAGORY</th>
                      <th>NICHE</th>
                      <th>M. POINT</th>
                      <th>STATUS</th>
                      <th>ACTION</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php   
                    $sql="SELECT * FROM `web_info` ORDER BY `id` ";
                    $result=mysqli_query($conn,$sql);
                    if(mysqli_num_rows($result) > 0){
                      while($row=mysqli_fetch_assoc($result)){
                        $status="Not Verified";
                        $webuid=$row['web_uid'];
                        $sql1="SELECT * FROM `verified_web_info` WHERE `web_uid`='$webuid'";
                        $result1=mysqli_query($conn,$sql1);
                        if(mysqli_num_rows($result1) > 0){
                            $status="Verified";
                        } 
                  ?>
                    <tr>
                      <td><?php echo $row['web_uid']; ?></td>
                      <td><a href="<?php echo $row['web_link']; ?>"><?php echo $row['web_name']; ?></a></td>
                      <td><?php echo $row['web_traffic']; ?></td>
                      <td><?php echo $row['web_post']; ?></td>
                      <td><?php echo $row['da']; ?></td>
                      <td><?php echo $row['pa']; ?></td>
                      <td><?php echo $row['catagory']; ?></td>
                      <td><?php echo $row['niche']; ?></td>
                      <td><?php echo $row['mpoint']; ?></td>
                      <td><?php echo $status; ?></td>
                      <?php
                      if($status==="Verified"){
                        ?>
                        <td><a href="web_info_action.php?web_id=<?php echo $row['web_uid']; ?>&status=<?php echo $status; ?>">delete</a></td>
                        <?php
                      }else{
                            ?>
                              <td><a href="web_info_action.php?webuid=<?php echo $row['web_uid']; ?>">verify</a>&nbsp;&nbsp;&nbsp;<a href="web_info_action.php?web_id=<?php echo $row['web_uid']; ?>">delete</a></td>
                            <?php
                      }
                      ?>
                    </tr>
                    <?php  
                     }
                    }
                    ?>
                  </tbody> 
                </table>
              </div>
            </div>
          </div>
        </div>
       </div>
    </main>
    <!-- Essential javascripts for application to work-->
    <script src="../js/jquery-3.3.1.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="../js/plugins/pace.min.js"></script>
    <!-- Page specific javascripts-->
    <!-- Data table plugin-->
    <script type="text/javascript" src="../js/plugins/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="../js/plugins/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript">$('#sampleTable').DataTable();</script>
    <!-- Google analytics script-->
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