<?php include '../assets/connect.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="description" content="Mayankal Free Blogging Community Admin panel where you can see update and delete the profiles of user and administrate the whole website">
    <!-- Twitter meta-->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:site" content="@pratikborsadiya">
    <meta property="twitter:creator" content="@pratikborsadiya">
    <!-- Open Graph Meta-->
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Mayankal">
    <meta property="og:title" content="Maynkal - Free Blogger Community">
    <meta property="og:url" content="https://mayankal.ml">
    <meta property="og:image" content="https://www.mayankal.ml/images/logom.png">
    <meta property="og:description" content="Mayankal Free Blogging Community Admin panel where you can see update and delete the profiles of user and administrate the whole website">
    <title>Mayankal - Free Blogging Community</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="../css/main.css">
    <!-- for card in user aded -->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body class="app sidebar-mini">
    <!-- Navbar-->
    <!-- Sidebar menu-->
    <?php include '../assets/admin_sidebar.php'; ?>
    <!-- how many user  -->
    <?php
    
      $sql="SELECT * FROM `user`";
      $run=mysqli_query($conn,$sql);
      $number=mysqli_num_rows($run);
    
    ?>
   
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-dashboard"></i> Dashboard</h1>
          <p>A free and open source Bootstrap 4 admin template</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-6 col-lg-3">
          <div class="widget-small primary coloured-icon"><i class="icon fa fa-users fa-3x"></i>
            <div class="info">
              <h4>Users</h4>
              <p><b><?php echo $number;?> </b></p>
            </div>
          </div>
        </div>
        <!-- for adding all coins  -->
    <?php
      $sql1="SELECT * FROM `coins_earn`";
      $run=mysqli_query($conn,$sql1);
      
      $coin=0;
      while($row=mysqli_fetch_assoc($run)){
          $coin=$coin + $row['coin_earn'];
         
      }
    ?>
       
        <div class="col-md-6 col-lg-3">
          <div class="widget-small info coloured-icon"><i class="icon fa fa-bitcoin fa-3x"></i>
            <div class="info">
              <h4>Total Coins</h4>
              <p><b><?php  echo $coin; ?></b></p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="widget-small warning coloured-icon"><i class="icon fa fa-rupee fa-3x"></i>
            <div class="info">
              <h4>Earning</h4>
              <p><b><?php echo ceil($coin/70); ?></b></p>
            </div>
          </div>
        </div>
        <!--  how many authors -->
        <?php
        $sql="SELECT * FROM `author`";
        $run=mysqli_query($conn,$sql);
        $num=mysqli_num_rows($run);

        ?>
        <!-- end -->
        <div class="col-md-6 col-lg-3">
          <div class="widget-small danger coloured-icon"><i class="icon fa fa-user fa-3x"></i>
            <div class="info">
              <h4>Authors</h4>
              <p><b><?php echo $num;  ?></b></p>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="tile">
            <h3 class="tile-title">User Added</h3>
            <div class="row">
                <div class="col-sm-3">Name</div>
                <div class="col-sm-3">Status</div>
                <div class="col-sm-3">Profile Link</div>
                <div class="col-sm-3">Date</div>
            </div>
            <?php 
              $sql1="SELECT * FROM `user` order by `id` DESC LIMIT 0,5";
              $result=mysqli_query($conn,$sql1);
              if($num=mysqli_num_rows($result)){
                while($row=mysqli_fetch_assoc($result)){
                  $name=$row['name'];
                  $ver_status="";
                  $status=$row['verify'];
                  if($status==1){
                    $ver_status="Verified";
                  }else{
                    $ver_status="Not Verified";
                  }
                  $uid=$row['unique_id'];
                  $date=$row['date_reg'];
            ?>
            <div class="w3-panel w3-card">
              <div class="row" style="height:60px;padding-top:20px;">
                <div class="col-sm-3"><?php echo $name; ?></div>
                <div class="col-sm-3"><?php echo $ver_status ?></div>
                <div class="col-sm-3">
                  <a href="http://localhost/project/mayankalv2/user-profile.php?uid=<?php echo $uid; ?>" class="btn btn-success" style="margin-bottom:25px;">Profile link</a>
                </div>
                <div class="col-sm-3"><?php  echo $date; ?></div>
              </div>
            </div>
           <?php   
             }
            }
           ?>
          </div>
        </div>
        <div class="col-md-6">
          <div class="tile">
           <h3 class="tile-title">Website Approval</h3>
              <div class="row">
                  <div class="col-sm-4">Website Name</div>
                  <div class="col-sm-6" style="padding-left:60px;">Verification Code</div>
                  <div class="col-sm-2">Date</div>
              </div>
              <?php 
                    $sql2="SELECT * FROM `web_info` ORDER BY id DESC LIMIT 0,5";
                    $result1=mysqli_query($conn,$sql2);
                    if(mysqli_num_rows($result1)){
                      while($row1=mysqli_fetch_assoc($result1)){
                        $web_name=$row1['web_name'];
                        $link=$row1['web_link'];
                        $date1=$row1['date'];
                        $code=htmlentities($row1['securecode']);
                        $code1=explode("=",$code);
              ?>
              <a href="<?php echo $link; ?>" target="_blank" style="text-decoration:none;">
              <div class="w3-panel w3-card">
                <div class="row" style="height:60px;">
                  <div class="col-sm-4" tyle="padding-top:20px;"><?php echo $web_name; ?></div>
                  <div class="col-sm-6" style="text-overflow:hidden;padding-top:15px;"><?php echo $code1[2]; ?></div>
                 
                  <div class="col-sm-2"><?php echo $date1; ?></div>
                </div>
              </div>
              <?php 
              
               }
              }
              ?>
              </a>
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
    <script type="text/javascript" src="../js/plugins/chart.js"></script>
    <script type="text/javascript">
      var data = {
      	labels: ["January", "February", "March", "April", "May"],
      	datasets: [
      		{
      			label: "My First dataset",
      			fillColor: "rgba(220,220,220,0.2)",
      			strokeColor: "rgba(220,220,220,1)",
      			pointColor: "rgba(220,220,220,1)",
      			pointStrokeColor: "#fff",
      			pointHighlightFill: "#fff",
      			pointHighlightStroke: "rgba(220,220,220,1)",
      			data: [65, 59, 80, 81, 56]
      		},
      		{
      			label: "My Second dataset",
      			fillColor: "rgba(151,187,205,0.2)",
      			strokeColor: "rgba(151,187,205,1)",
      			pointColor: "rgba(151,187,205,1)",
      			pointStrokeColor: "#fff",
      			pointHighlightFill: "#fff",
      			pointHighlightStroke: "rgba(151,187,205,1)",
      			data: [28, 48, 40, 19, 86]
      		}
      	]
      };
      var pdata = [
      	{
      		value: 300,
      		color: "#46BFBD",
      		highlight: "#5AD3D1",
      		label: "Complete"
      	},
      	{
      		value: 50,
      		color:"#F7464A",
      		highlight: "#FF5A5E",
      		label: "In-Progress"
      	}
      ]
      
      var ctxl = $("#lineChartDemo").get(0).getContext("2d");
      var lineChart = new Chart(ctxl).Line(data);
      
      var ctxp = $("#pieChartDemo").get(0).getContext("2d");
      var pieChart = new Chart(ctxp).Pie(pdata);
    </script>
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