
<?php
session_start();
?>
<html>
<head>
  <title>Blood Collection Form</title>
 <link href="css/menu.css" rel="stylesheet">
   <link href="css/style.css" rel="stylesheet">
  <link href="css/menu.css" rel="stylesheet">

    <link href="css/footercollapse.css" rel="stylesheet">
	<link href="css/navmenu.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<style>
    #top {
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
    #help{
        float: left;
        padding: 10px;
        border: 1px solid lightgrey;
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
		<!-- <div style="background-color: #FCFCFC; overflow: hidden; background-color: #013D6C;"> -->
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
			<form action="/bloodbank/blood_collect.php" method="post">
				<h3>Blood Collection Form Only for Member</h3>			
				<table width="100%" border="0" cellspacing="5" cellpadding="5">			  
				   <tr>
                        <td>Donor ID</td>
                        <td><input name="id" placeholder="Enter Your ID" name="id" required></td>
                    </tr>
					
					<td>Center</td>
                    <td>
                        <select name="center">
						<option value="Select--">--Select Center--</option>
                            <option value="HO">Banani/HO</option>
                            <option value="Banasree">Banasree</option>
                            <option value="Gulshan">Gulshan-1</option>
                           
                            <option value="Mohakhali">Mohakhali</option>
                            <option value="DMC">Dhaka Medical</option>
                        </select>
                    </td>
				  <tr>
                        <td>Collection Date</td>
                        <td><input type="date" name="date" required></td>
                    </tr>
                    <td>Blood Group</td>
                    <td>
                        <select name="blood_group">
                            <option value="A+">A+</option>
                            <option value="B+">B+</option>
                            <option value="A-">A-</option>
                            <option value="B-">B-</option>
                            <option value="AB-">AB-</option>
                            <option value="O+">O+</option>
                            <option value="O-">O-</option>
                            <option value="AB+">AB+</option>
                        </select>
                    </td>
                    <tr>
                      <td>Quantity</td>
                      <td>
                         <select name="quantity">
                         <option value="Select--">--Select Bags--</option>
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>

                        </select>
                        </td>
					</tr>

                    <tr>
                        <td>Blood Test</td>
                        <td>
                            <select name="blood_test">
                                <option value="ok">Ok</option>
                                <option value="none">none</option>

                            </select>
                        </td>
                    </tr>
					<tr>
                        <td>Expiry Date</td>
                        <td><input type="date" name="date" required></td>
                    </tr>
					
                    <tr>
					<td>&nbsp;</td>
					<td><input name="save" type="submit" value="SAVE">
					  <input name="cencel" type="submit" value="Cancel">
					<input name="back" type="submit" value="BACK"></td>
				  </tr>
				  <tr>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
				  </tr>
				</table>
			</form>

            <div id="help">
                <p><i class="material-icons" style="font-size:30px;color:yellow">report_problem</i> If donor create done, Collection will be proceed </p>
                <hr width="100%" size="3"></hr>

                <p>Click Here <a href="/bloodbank/collection_list.php">Donation of Blood</a>.</p>
            </div>


        </div>


        </div>
    </div>
		<!-- Footer Page -->
		<div id ="footer"></div>
	</div>
</body>
</html>
<?php
require_once('db_connection.php');
#if(strcmp($_POST['save'],'SAVE')==0)
if(isset($_POST['save']))
{
	//echo"HELLLLO";
		
	$d_id = $_POST['id'];
	$d_center = $_POST['center'];
	$d_date = $_POST['date'];
	$d_blood_group = $_POST['blood_group'];
	$d_quantity = $_POST['quantity'];
	$d_blood_test = $_POST['blood_test'];
	$d_expiry_date = $_POST['date'];
    
	
	// Insert data into mysql 
	$sql=mysqli_query($con, "INSERT INTO collect_blood VALUES(null, '$d_id', '$d_center', '$d_date','$d_blood_group', '$d_quantity', '$d_blood_test', '$d_expiry_date')");
	//$result=mysql_query($sql);

	// if successfully insert data into database, displays message "Successful".

	if($sql){
	?>
		<script>alert('successfully registered ');</script>
	<?php
	}
	else {
	?>
		<script>alert('error while registering you...');</script>
	<?php
	}
	}
	?>