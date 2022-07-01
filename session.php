<?php
   require_once('db_connection');
   
   $user_check = $_SESSION['username'];
   $sql="select * from user where username='$user_check' ";
   $ses_sql = mysqli_query($con,$sql);
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['username'];
  
   if(!isset($_SESSION['username'])){
      header("location:login.php");
   }
?>