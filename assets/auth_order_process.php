<?php 
function clean($string) {
   return preg_replace('/[^A-Za-z0-9|&\ ]/', '', $string); // Removes special chars.
}
 if(isset($_POST['submit'])) {

   $title = clean($_POST['title']);
   $post = strip_tags($_POST['editor']);
   echo $title . "<br>" . $post;
   //echo $_POST['order'];
   
 } 




?>