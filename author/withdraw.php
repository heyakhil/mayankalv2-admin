
<?php include 'check1.php'; error_reporting(0); ?>
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
    <!-- css for withdraw -->
    <link rel="stylesheet" href="../css/style.css">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="../css/main.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body class="app sidebar-mini">
    <!-- Navbar-->
    <?php include 'author_sidebar.php'; ?>
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="app-menu__icon fa fa-pie-chart"></i> Withdraw </h1>
          <p>Start a beautiful journey here</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="#">Blank Page</a></li>
        </ul>
      </div>
  
     
      <div id="titlebar" class="gradient">
	

					<div class="container" style="margin-left:11%;">

					
                    <div class="row">
                        <div class="col-md-10">
                        <div class="tile">
                        <h3 class="tile-title">Withdraw</h3>
                        <div class="tile-body">
    				<form action="widthpro.php?mobdata=true" method="post">
							<select id="mySelect"  name="select1"  onchange="myFunction()">
							<option selected value="0">--Withdraw Through--</option>
							<option value="1">G Pay</option>
							<option value="2">Paytm</option>
							<option value="3">PhonePay</option>
							<option value="4">Bank Account</option>
						  </select>      		
							<br>
							
						<div id="demo" style="display:none">
							<p>
				
								Enter your Mobile no:
								<input type="number" name="mno" id="number" required="required">
								<input type="submit" name="num">
							</p>
						</div>
					</form>

					<form action="widthpro.php?bank=true" method="post">	

						
						<div  id="dmmm" style="display:none">
						<p>
				
							Name:
							<input type="text" name="name" placeholder="Enter your Name" required>
		
							Bank Account no:
							<input type="number" name="acno" placeholder="Enter your Bank Account no" required>
		
							IFSC code:
							<input type="text" name="ifsccode"  placeholder="Enter your Bank Account no" required>
							<input type="submit" name="submit">
						</p>
					</div>
				</form>
				</div>
			</div>
		</div>	
        </div>
		
              
            </div>
           
          </div>
        </div>
        </div>
      </div>
    </main>
    <script>
			
            function myFunction() {


                  var selector = document.getElementById('mySelect');
                  var value = selector[selector.selectedIndex].value;
      
                  if(value=="0")
                      //document.getElementById('display').innerHTML = "farhan";
                      {
                          document.getElementById('demo').style.display='none';
                          document.getElementById('dmmm').style.display='none';
                          return false;
                      }	

                    if(value=="1")
                  //document.getElementById('display').innerHTML = "farhan";
                      {
                          document.getElementById('demo').style.display='block';
                          document.getElementById('dmmm').style.display='none';
                          return false;
                      }
                    if(value=="2")
                  //document.getElementById('display').innerHTML = "alam";
                      {
                          document.getElementById('demo').style.display='block';
                          document.getElementById('dmmm').style.display='none';
                          return false;
                      }
                  if(value=="3")
                      //document.getElementById('display').innerHTML = "alam";
                      {
                          document.getElementById('demo').style.display='block';
                          document.getElementById('dmmm').style.display='none';
                          return false;
                      }
                  if(value=="4")
                      //document.getElementById('display').innerHTML = "alam";
                      {
                          document.getElementById('dmmm').style.display='block';
                          document.getElementById('demo').style.display='none';
                          return false;
                      }

                      //document.getElementById("myForm").submit();
            }
      
      
  </script>
  
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
