
<?php  
include '../assets/connect.php'; 
include '../assets/data_set.php';        
?>

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
    <meta property="og:site_name" content="Mayankal">
    <meta property="og:title" content="Mayankal - Free Bloggin Community">

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

  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


</head>
  <body class="app sidebar-mini">
    <!-- Navbar-->

    <?php  
          $id=$_SESSION['id'];
          $sql1="SELECT * FROM `author` WHERE `id`='$id'";
          $run=mysqli_query($conn,$sql1);
          $row=mysqli_fetch_assoc($run); 
    ?>
    <?php include 'author_sidebar.php'; ?>
    <!-- for data of author -->

    <main class="app-content">
      <div class="app-title">
        <div>   
          <h1><i class='fa fa-edit' style='font-size:24px'></i> Write Post</h1>
          <p>&nbsp &nbsp Give your best</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="WritePost.php">Write Post</a></li>
        </ul>
      </div>

    <div class="row">
      <div class="col-lg-8" style="margin-top:-40px;">
        <div class="form-group">
          <form action="../assets/auth_order_process.php" method="POST">
          <h3>Title</h3>
          <input type="text" class="form-control" autocomplete="off" id="usr" placeholder="Enter the title" name="title">
          <hr>
            <textarea class="ckeditor" name="editor"></textarea><br> 
            <strong>Letter count: <span id="letterCount"></span></strong>
            <input type="submit" id="btn" class="btn btn-primary" value="Submit" name="submit" style="width:833px;">
          </form>
        </div>
      </div>
      <!--  Right Side-->
      <div class="col-lg-1"></div>

    <div class="col-lg-3" style="margin-top: 35px;">
      <div class="form-group" style="width: 100%;">
        <label for="orders">Select Your Orders:</label>
        <select class="form-control" id="orders" onclick="myFunc()" name="auth_orders">
          <option selected>--Your Orders--</option>
            <?php 
              $sql = "SELECT * FROM author_orders WHERE `auth_uid`='$uid'";
              $result = mysqli_query($conn, $sql);
              if (mysqli_num_rows($result) > 0) {
                  // output data of each row
                  while($row = mysqli_fetch_assoc($result)) {
                      echo '<option value='.$row['order_id'].'>'.strtoupper($row['post_cat']).'</option>';
                  }
              } else {
                  echo "0 results";
              }
              
             ?>
        </select>
      </div>
      <div class="row" id="show_product">  
        
      </div>  
  
 </div>
</div>
<!-- End Right-side -->
</div> 
</main>
  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<!-- Essential javascripts for application to work-->
<script type="text/javascript" src="../js/ckeditor/ckeditor.js"></script>
<script src="../js/popper.min.js"></script>
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

<script>  
 $(document).ready(function(){  
      $('#orders').change(function(){  
           var order_id = $(this).val();  
           $.ajax({  
                url:"../assets/load_data.php",  
                method:"POST",  
                data:{order_id:order_id},  
                success:function(data){  
                     $('#show_product').html(data); 
                }  
                
           }); 
          
           
      });  
 });  
 </script>  

 <script type="text/javascript">CKEDITOR.replace('editor',{
   height: '300',
   maxlength: '400' /* this is the important part */
});
</script>
<script type="text/javascript">
  $(document).ready(function(){
   $("#btn").attr('disabled', 'disabled');
   var editAbstract=CKEDITOR.instances.editor;

   editAbstract.on("key",function(e) {      
                    //e.editor.config.maxlength       
      var minLength=5; //5000 min number of character threshold that author must reach
         
         //process of counting the character.
      e.editor.document.on("keyup",function() {KeyUp(e.editor,minLength,"letterCount");});
      e.editor.document.on("paste",function() {KeyUp(e.editor,minLength,"letterCount");});
      e.editor.document.on("blur",function() {KeyUp(e.editor,minLength,"letterCount");});
   },editAbstract.element.$);

   //function to handle the count check
   function KeyUp(editorID,minLength,infoID) {

      //If you want it to count all html code then just remove everything from and after '.replace...'
      var text=editorID.getData().replace(/<("[^"]*"|'[^']*'|[^'">])*>/gi, '').replace(/^\s+|\s+$/g, '');
      $("#"+infoID).text(text.length);

      if(text.length >= minLength) {   
        $("#btn").attr('disabled', false);
         // alert("You cannot have more than "+maxLimit+" characters");         
         // editorID.setData(text.substr(0,maxLimit));
         // editor.cancel();
      } 
   }
  
   
});

</script>
  <script type="text/javascript">
    function myFunc(){
      var x = document.getElementById("orders").selectedIndex;
      var y = document.getElementById("orders").options;
      function setCookie(name,value,days) {
            var expires = "";
            if (days) {
                var date = new Date();
                date.setTime(date.getTime() + (days*24*60*60*1000));
                expires = "; expires=" + date.toUTCString();
            }
            document.cookie = name + "=" + (value || "")  + expires + "; path=/";
        }
      setCookie('order-id', y[x].value, 1);
      console.log("done")
  }
  </script>
  </body>
</html>
