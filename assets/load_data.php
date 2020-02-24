<?php 
	include 'connect.php';
$output = '';
 if(isset($_POST["order_id"]))  
 {  
      if($_POST["order_id"] != '')  
      {  
           $sql = "SELECT * FROM author_orders WHERE order_id = '".$_POST["order_id"]."'";  
      }  
      else  
      {  
           $output = 'Not Data Please Select Your Order';  
      }  
      $result = mysqli_query($conn, $sql);  
      while($row = mysqli_fetch_array($result))  
      {  
           $output = '<div class="panel-group" id="accordion" style="width: 100%;">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">
            <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Category</a>
            </h4>
          </div>
          <div id="collapse1" class="panel-collapse collapse">
            <div class="panel-body">'.$row['post_cat'].'
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
            <div class="panel-body">'.$row['order_id'].'
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
            <div class="panel-body">400-500 Words 
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
            <div class="panel-body">'.$row['descrip'].'
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
            <div class="panel-body">'.$row['notes'].'
            </div>
          </div>
        </div> 
    </div>
    </div>';  
      }  
      echo $output;  
 }  


 ?>