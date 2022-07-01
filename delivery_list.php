
<?php
session_start();
?>

<html>
<head>
  <title>Given List</title>
	 <link href="css/menu.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <link href="css/slide.css" rel="stylesheet">
    <link href="css/footercollapse.css" rel="stylesheet">
	<link href="css/navmenu.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>
    #top{
        width: auto;
        height: 30px;
        background-color: #aab7d1;
        alignment: top;
        text-decoration-color: red;
    }
    body {
        font-family: Arial, Helvetica, sans-serif;
    }

    .navbar {
        overflow: hidden;
        background-color: #333;
    }

    .navbar a {
        float: left;
        font-size: 16px;
        color: white;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
    }

    .dropdown {
        float: left;
        overflow: hidden;
    }

    .dropdown .dropbtn {
        font-size: 16px;
        border: none;
        outline: none;
        color: white;
        padding: 14px 16px;
        background-color: inherit;
        font-family: inherit;
        margin: 0;
    }

    .navbar a:hover, .dropdown:hover .dropbtn {
        background-color: red;
    }

    .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f9f9f9;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        z-index: 1;
    }

    .dropdown-content a {
        float: none;
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
        text-align: left;
    }

    .dropdown-content a:hover {
        background-color: #ddd;
    }

    .dropdown:hover .dropdown-content {
        display: block;
    }
    tr {
        background-color: lightgray;
    }
	tr:hover {
          background-color: #ffff99;
        }
 #top{
            width: auto;
            height: 30px;
            background-color: #aab7d1;
            alignment: top;
            text-decoration-color: red;
        }
</style>
<body>
<div id="top">
 <?php   
   if(isset($_SESSION["username"])) {
                  $name = $_SESSION["username"];													
                }
     ?>
	  <?php
              if(!isset($_SESSION["username"])) {
			     echo "<span style=float:right;> <a href=/bloodbank/login.php>Login</a></span>";
				  exit();
				 }
			?>
	  <?php
            if(isset($_SESSION["username"]))
            {
                echo "<span style=float:right;>Active ".$name.",";
                echo "<a href=/bloodbank/logout.php>Logout</a></span>";
            }
            ?>
</div>

	<div class="container">
		<!-- Header -->
		<div id="header">
			<img style="height:140px; width:1200px" src="images/bbanner.png" />
		</div>
		<!-- Menu Page -->
        <div style="background-color: #FCFCFC; background-color: #DFDFDF">
            <div class="navbar">

                <?php
                if($_SESSION['role']=='admin')
                {
                    echo "<div class=dropdown>";
                    echo "<button class=dropbtn>Donor<i class='fa fa-caret-down'></i></button>";
                    echo "<div class=dropdown-content>";
                    echo "<a href=/bloodbank/donor.php>Create Donor</a>";
                    echo "<a href=/bloodbank/donorlist.php>Donor List</a>";
                    echo "</div>";
                    echo "</div>";

                    echo "<div class=dropdown>";
                    echo "<button class=dropbtn>Member<i class='fa fa-caret-down'></i></button>";
                    echo "<div class=dropdown-content>";
                    echo "<a href=/bloodbank/sign_up.php>Member Signup</a>";
                    echo "<a href=/bloodbank/member_list.php>Member List</a>";
                    echo "</div>";
                    echo"</div>";

                    echo "<div class=dropdown>";
                    echo "<button class=dropbtn>Blood Management<i class='fa fa-caret-down'></i></button>";
                    echo "<div class=dropdown-content>";
                    echo "<a href=/bloodbank/blood_collect.php>Collect Blood</a>";
                    echo "<a href=/bloodbank/collection_list.php>Collection List</a>";
                    echo "<a href=/bloodbank/blood_delivery.php>Blood Delivery</a>";
                    echo "<a href=/bloodbank/delivery_list.php>Delivery List</a>";
                    echo "</div>";
                    echo "</div>";

                    echo "<a href=/bloodbank/requested_list.php>Requisition List</a>";

                }
                else
                {
                    echo "<a href=/bloodbank/blood_request.php>Blood Requisition</a>";
                }
                ?>

            </div>
		<!-- Body Page -->
		<div id="main-container"
			style="clear: both; height: auto; min-height: 600px; ">
			<?php
				 require_once('db_connection.php');
				$res = mysqli_query($con, "Select * from blood_delivery");
				$num= mysqli_num_rows($res);
				// print "<table border=1>";
			?>
			<h3>Delivery Blood List</h3>
			 <table width="100%" border="0" cellspacing="5" cellpadding="5">
			  <tr style="background-color: #d2322d">
				<td><strong>User_ID</strong></td>
                  <td><strong>Request_Id</strong></td>
				<td><strong>Center</strong></td>
				<td><strong>Date</strong></td>
				<td><strong>Blood_Group</strong></td>
				<td><strong>Quantity </strong></td>
				<td>Action</td>
			  </tr>

			<?php
				while ($row = mysqli_fetch_row($res))
				{
						print "<tr>";
						foreach($row as $field)
						{
								echo "<td> $field</td>" ;
						}
				  echo   "<td><a href=\"delete.php?id=".$row[0]."\">Delete</a></td>";
				   echo   "<td><a href=\"edit.php?id=".$row[0]."\">Edit</a></td>";
				}
			?>
			</table>
								
		</div>
		<!-- Footer Page -->
		<div id ="footer"></div>
	</div>
</body>
</html>
<script>
function DeleteFile(id) {
    if (confirm("Are you sure?")) {
        // your deletion code
        window.location.href='delete.php?id='+id;
    }
    return false;
}
</script>
