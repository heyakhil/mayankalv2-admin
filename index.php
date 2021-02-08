<?php  
error_reporting(0);
  if ($_COOKIE['username']!="" && $_COOKIE['password'] != "") {
    $user = $_COOKIE['username'];
    $pass = $_COOKIE['password'];
  }else{
    $user = "";
    $pass = "";
  }
 ?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Login - Admin (Mayankal)</title>
  </head>
  <body>
    <section class="material-half-bg">
      <div class="cover"></div>
    </section>
    <section class="login-content">
      <div class="logo">
        <h1>Admin - Mayankal</h1>
      </div>
      <div class="login-box">
        <form class="login-form" action="assets/process.php" method="post">
          <h3 class="login-head"><i class="fa fa-lg fa-fw fa-user"></i>SIGN IN</h3>
          <div class="form-group">
            <label class="control-label">USERNAME</label>
            <input class="form-control" type="text" placeholder="Username" autofocus name="username" id="user" required value="<?php echo $user; ?>">
          </div>
          <div class="form-group">
            <label class="control-label">PASSWORD</label>
            <input class="form-control" id="pass" type="password" placeholder="Password" name="password" required value="<?php echo $pass; ?>"><span><a id="show_pwd"  href="javascript:;"><i class="fa fa-eye"></i></a></span>
          </div>
          <div class="form-group">
            <div class="utility">
              <div class="animated-checkbox">
                <label>
                  <input type="checkbox" id="check"><span class="label-text">Stay Signed in</span>
                </label>
              </div>
              <p class="semibold-text mb-2"><a href="#" data-toggle="modal" data-target="#myModal1">Forgot Password ?</a></p>
            </div>
          </div>
          <div class="form-group btn-container">
            <button type="submit" class="btn btn-primary btn-block" onclick="myfuncky();" name="submit"><i class="fa fa-sign-in fa-lg fa-fw"></i>SIGN IN</button>
          </div>
        </form>
      </div>
      <div class="container">
		  <!-- Modal -->
		  <div class="modal fade" id="myModal1" role="dialog">
		    <div class="modal-dialog">
		    
		      <!-- Modal content-->
		      <div class="modal-content">
          <div>
		        <div class="modal-header">
		        	<h4 class="modal-title">Forgot Password</h4>
		          <button type="button" class="close" data-dismiss="modal">&times;</button>
		        </div>
          </div>
		        <div class="modal-body">
		         <form action="forgot_process.php" id="send_mail" method="post">
					  <div class="form-group">
					    <label for="exampleInputEmail1">Email address</label>
					    <input type="email" class="form-control" id="email" required aria-describedby="emailHelp" name="email" placeholder="Enter email">
              <span><button id="submit_email" class="btn btn-success my-1">send</button></span>
					  </div>
            </form>
            <form id="verify_code">
            <div class="form-group">
					    <label for="otp">OTP</label>
					    <input type="text" class="form-control" id="otp" required aria-describedby="emailHelp" name="otp" placeholder="Enter OTP">
              <span><button id="submit_verify_code" class="btn btn-success my-3">Verify</button></span>
					  </div>
            </form>
          <form id="set_new_password">
            <div class="form-group">
					    <label for="exampleInputPassword1">New Password</label>
					    <input type="password" class="form-control" name="newpassword" id="newPassword" required placeholder="New Password">
					  </div>
            
            <div class="form-group">
					    <label for="exampleInputPassword1">Confirm New Password</label>
					    <input type="password" class="form-control" name="confirmpassword" id="confirmPassword" required placeholder="Confirm New Password">
              <div id="msg12">
              
              </div>
					  </div>
					  <button type="submit" id="submit_password" name="submit" class="btn btn-primary">Submit</button>
            </form>
				</form>
		        </div>
		        <div class="modal-footer">
		          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		        </div>
		      </div>
		    </div>
		  </div>
		</div>
    </section>
    <!-- Essential javascripts for application to work-->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="js/plugins/pace.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script type="text/javascript">
      // Login Page Flipbox control
      $('.login-content [data-toggle="flip"]').click(function() {
      	$('.login-box').toggleClass('flipped');
      	return false;
      });
      </script>

    <script type="text/javascript">
      function setCookie(name,value,days) {
        var expires = "";
        if (days) {
            var date = new Date();
            date.setTime(date.getTime() + (days*24*60*60*1000));
            expires = "; expires=" + date.toUTCString();
        }
        document.cookie = name + "=" + (value || "")  + expires + "; path=/";
    }
      function myfuncky(){
        var baby = "";
          if (document.getElementById("check").checked) {
            var user = document.getElementById('user').value;
            var pass = document.getElementById('pass').value;
            setCookie('username',user, 30);
            setCookie('password',pass, 30);
            console.log("its done");
        } 
      }

      if (document.cookie="user") {
        document.getElementById('check').checked = true;
      }
      
      $(document).ready(function(){
        function showHide(){
          $('#verify_code').hide();
          $('#set_new_password').hide();
          $('#verify_code').hide();

        }
        showHide();
        $('#show_pwd').click(function(){
          let id = document.getElementById('pass');
          if(id.type == 'password'){
            console.log(id.type = 'text');
            $('#show_pwd').html('<i class="fa fa-eye-slash">');
            
          }else{
            console.log(id.type = 'password');
            $('#show_pwd').html('<i class="fa fa-eye">');
          }
          
        });
        // console.log($);
        // for send email
        $('#submit_email').click(function(){
          var email = $('#email').val();
          // console.log(email);
          $.post('forgot_process.php',{email : email},function (data,status) {
            console.log(data , status);
            if(data == '1' && status == 'success'){
                  // alert('emaIL send successfully');
                  swal({
                        title: "Send Email",
                        text: "send email successfully!",
                        icon: "success",
                        button: "close",
                      });
                  $('#verify_code').show();
                  $('#send_mail').hide();
            }
            if(data == 'Enter registered Email' && status == 'success'){
              // alert(data);
              swal({
                        title: "Email send",
                        text: "Enter Registered Email.",
                        icon: "error",
                        button: "close",
                      });
            }
            if(data == '0' && status == 'success'){
              // alert(data);
              swal({
                        title: "Email send",
                        text: "Some problem occur.",
                        icon: "error",
                        button: "close",
                      });
            }else{
              
            }
          })
          return false;
        });

          // for otp
        $('#submit_verify_code').click(function () {
          var otp = $('#otp').val();
          var email=$('#email').val();
          $.post('forgot_process.php',{otp:otp,user_email : email},function (data,status) {
            if(data == '1' && status == 'success'){
              swal({
                        title: "OTP Verification",
                        text: "OTP verified successfully",
                        icon: "success",
                        button: "close",
                      });
            $('#verify_code').hide();
            $('#set_new_password').show();
            }else{
              // alert('some problem occur. Try Again ?');
              swal({
                        title: "OTP Verification",
                        text: "Some problem occur?",
                        icon: "error",
                        button: "close",
                      });
            }
          })
          return false;
        });

        // for check password is matching or not
        $('#confirmPassword').keyup(function(){
          var new_password = $('#newPassword').val();
          var cnf_password=$('#confirmPassword').val();
          if(cnf_password === new_password){
            // console.log('matched');
            $('#msg12').html('Password matched');
            $('#msg12').css('color' , 'green');
          }else{
            // console.log('not matched');
            $('#msg12').html('Enter Same password');
            $('#msg12').css('color' , 'red');
            
          }
        });

        // for confirm password
        $('#submit_password').click(function () {
          var new_password = $('#newPassword').val();
          var cnf_password=$('#confirmPassword').val();
          var email=$('#email').val();
          $.post('forgot_process.php',{
                                        new_password:new_password,
                                        cnf_password : cnf_password,
                                        user_verify_email:email
                                    },function (data,status) {
                                      if(data == '1' && status == 'success'){
                                        console.log(data , status);
                                        
                                        swal({
                                            title: "Change Password",
                                            text: "Password changed successfully.",
                                            icon: "success",
                                            button: "close",
                                          });
                                          window.location = 'index.php';
                                      }else{
                                          // alert('some problem occur. Try Again ?');
                                          swal({
                                                title: "Change Password",
                                                text: "Some problem occur?",
                                                icon: "error",
                                                button: "close",
                                              });
                                        }
          })
          return false;
        });
      });

    </script>

  </body>
</html>