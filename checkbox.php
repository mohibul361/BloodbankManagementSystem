<?php
require_once('db_connection.php');


if (isset($_POST['submit']))
{
 $chkbox = $_POST['chkbox'];
 
 $chkNew = ""; 
 
 foreach($chkbox as $chkNew1) 
 { 
 $chkNew .= $chkNew1 . ","; 
 } 
 
 
$sql = mysqli_query($con, "INSERT INTO delivery_status (status) VALUES (null, '$chkNew')");
 
 mysql_query($sql) or die(mysql_error());
 

 echo "Successfully Submitted.";
 }



?>