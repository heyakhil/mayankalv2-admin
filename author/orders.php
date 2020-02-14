<?php  include '../assets/connect.php'; ?>
<?php  include'check1.php'; error_reporting(0); ?>
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
    <link rel="stylesheet" href="../css/style.css">  
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body class="app sidebar-mini">
    <!-- Navbar-->
    <?php include 'author_sidebar.php'; ?>
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-cog fa-lg"></i> Orders </h1>
          <p>Start a beautiful journey here</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="#">Blank Page</a></li>
        </ul>
      </div>
  
    <div class="container">
	    
		
        <div class="row" >
        <div class="col-md-12">
          
            <h3 class="tile-title">Oreders:</h3>
            <div class="tile-body">
			    <!-- fetch data from order  -->
           
                <?php 
                    // for users auth id
                    $uid=$_SESSION['id'];
                    $sql1="SELECT * FROM `author` WHERE `id`='$uid'";
                    $run=mysqli_query($conn,$sql1);
                    $row=mysqli_fetch_assoc($run);
                    $uid1=$row['auth_id'];
                    // for order details
                    $sql1="SELECT * FROM `author_orders` WHERE `auth_uid`='$uid1' ORDER BY id DESC";
                    $run=mysqli_query($conn,$sql1);
                  if(mysqli_num_rows($run) > 0){
                    while($row=mysqli_fetch_assoc($run)){
                        ?>
				
				
			                        <!-- Tasks Container -->
			                        <div class="tasks-list-container margin-top-35">
		
					                  	<!-- Task -->
						                    <div class="task-listing">

							      <!-- Job Listing Details -->
							                    <div class="task-listing-details">

							      	<!-- Details -->
							            	<div class="task-listing-description">
								          	<div class="row">
										        <div class="col-md-11"><h2 class="task-listing-title">Category:- <?php echo $row['post_cat'];  ?></h2></div>
									        	<div class="col-md-1" style="margin-left: 0px;"><button class="button" type="submit"  onclick="WriteContent();"><i class="fa fa-edit"></i></button></div>
								          	</div>
								          	<br>
									          <h3 class="task-listing-title">Order Id: <?php  echo $row['order_id']; ?></h3>
                                    <?php $orderid=$row['order_id']; ?>
										
								        	<p><b style="color:red; font-size: 22px;" >Note:- <?php echo $row['imp_not']; ?> </b></p><br>
								        	<h3>Discription:- </h3>
								        	<div class="dummy">
									        <p style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; font-size:22px;"><?php  echo $row['descrip']; ?></p>
									</div>
								</div>
                                </div>
							</div>
						</div>
                    </div>	
				<?php
                    }
                  }else{
                    echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;You  have  0 Orders";
                  }
                ?>
             </div>
				
				
        
        </div>
    </div>

    <script src="../js/readMoreJS.min.js"></script>
	<script type="text/javascript">
	            $readMoreJS.init({
	            target: '.dummy p',           // Selector of the element the plugin applies to (any CSS selector, eg: '#', '.'). Default: ''
	            numOfWords: 80,               // Number of words to initially display (any number). Default: 50
	            toggle: true,                 // If true, user can toggle between 'read more' and 'read less'. Default: true
	            moreLink: 'Read More ...',    // The text of 'Read more' link. Default: 'read more ...'
	            lessLink: 'Read Less'         // The text of 'Read less' link. Default: 'read less'
	        });
		
	</script>
    <script type="text/javascript">
	        function WriteContent(){
		            location.href = "WriteContent.php?uid=<?php  echo $uid1."&". "or_id" ."=".$orderid; ?>";
	            }
</script>

        </body>
    </html>