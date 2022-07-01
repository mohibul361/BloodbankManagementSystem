<?php

     $user = "root";
     $pwd = " ";
     $host = "127.0.0.1";
     $db = "bloodbank";
     $con = mysqli_connect($host, $user);
     if(!$con)
     {
        echo("not possible to connect");
        exit();
     }
     else
     {
       #echo("My sql has connected");
     }
    mysqli_select_db($con, $db)or die("could not select database");

?>
