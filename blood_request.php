<?php
session_start();
?>
<html>
<head>
    <title>Blood Request</title>
    <link href="css/menu.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/footercollapse.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
</head>
<style>

    #top{
        width: auto;
        height: 30px;
        background-color: #aab7d1;
        alignment: top;
        text-decoration-color: red;
    }
    #whyblood{
        height: 300px; width: auto; background-color: #5cb85;
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
 #pic{
    float: right;
}
  #help{
        float: left;
        padding: 10px;
        border: 1px solid lightgrey;
    }
</style>

<body>
<!-- top-link -->
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
			
	 <!-- Hospital Login access --------->		
			

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

    </div>
    <!-- Body Page -->
    <div id="main-container" style="clear: both; height: auto; min-height: 800px; ">
        <h3>Blood Requisition</h3>
        <div id="registration" style="float:left; width:50%">
            <form action="/bloodbank/blood_request.php" method="POST">

                <table width="100%" border="0" cellspacing="5" cellpadding="5">
                    <tr>
                        <td>Donor/User ID</td>
                        <td><input name="don_id" placeholder="Enter Your ID" name="don_id" required></td>
                    </tr>

					
                    <tr>
                        <td>Required Date</td>
                        <td><input type="date" name="require_date" required></td>
                    </tr>
                    <tr>
                        <td>Blood Group</td>
                        <td>
                            <select name="blood_group">
                                <option value="A+">A+</option>
                                <option value="B+">B+</option>
                                <option value="A-">A-</option>
                                <option value="B-">B-</option>
                                <option value="O+">O+</option>
                                <option value="O-">O-</option>
                            </select>
                        </td>
                    </tr>

                    <tr>
                    <td>Blood Type</td>
                    <td>
                        <select name="blood_type">
                            <option value="Select--">--Select--</option>
                            <option value="Plasma">plasma</option>
                            <option value="Platelets">Platelets</option>

                        </select>
                    </td>
                    </tr>

					<tr>
                        <td>Quantity</td>
                        <td>
                            <select name="quantity">
                                <option value="select bags">--Select Bags--</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                              
                            </select>
                        </td>
                    </tr>
					
                    <tr>
                        <td>Patient Info</td>
                        <td><input placeholder="Enter Patient Info" name="patient_info" required></td>
                    </tr>
                    <tr>
                        <td>Contact</td>
                        <td><input placeholder="Mobile No" name="contact" required></td>
                    </tr>
                    <tr>
                        <td>Location</td>
                        <td><input name="location" placeholder="Enter Your Location" type="text" required></td>
                    </tr>
                    
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
                <p><i class="material-icons" style="font-size:30px;color:yellow">report_problem</i> If User creation done, Blood Request will be proceed </p>
                <hr width="100%" size="3"></hr>           
            </div>
        </div>

        <div id="pic">
            <p style="background-color: #c9302c" >Need Blood? Please fill up form if you have User account.</p>
            <hr width="100%" size="2"></hr>

            <p><img src="images/bloodneeded.jpg" alt="camp" style="width:400px; height:200px; margin-right:15px; margin-bottom:15px; float:right;"> </p>
        </div>

    </div>
</div>


<!-- Footer Page -->
<div id ="footer">
    <p align="center"> @UNISA 2019,All Right Reserved <p>

        <nav id="footer-nav">
            <ul id="footer-nav-list">
                <li id="footer-nav-item"; style="font-family: Arial, Helvetica, sans-serif">
                    <a href="/bloodbank/medical.php " class="footer-nav-link" title="Contact us" target="_top">
                        Our Medical Teams
                    </a>
                </li>
                <li id="footer-nav-item"; style="font-family: Arial, Helvetica, sans-serif">
                    <a href="/bloodbank/blood_request.php " class="footer-nav-link" title="Blood Request" target="_top">
                        Blood Requisition
                    </a>
                </li>
                <li id="footer-nav-item"; style="font-family: Arial, Helvetica, sans-serif">
                    <a href="/bloodbank/campaign.php " class="footer-nav-link" title="Contact us" target="_top">
                        Compaign For Blood
                    </a>
                </li>
                <li id="footer-nav-item"; style="font-family: Arial, Helvetica, sans-serif">
                    <a href="/bloodbank/Partner.php?ab='abir'" class="footer-nav-link" title="Our partners" target="_top">
                        Our Partners
                    </a>
                </li>
                <li id="footer-nav-item"; style="font-family: Arial, Helvetica, sans-serif">
                    <a href="/bloodbank/feedback.php " class="footer-nav-link"  title="feedback" target="_top">
                        Feedback
                    </a>
                </li>


            </ul>
        </nav>


</div>
</div>

</body>
</html>

<?php
require_once('db_connection.php');
#if(strcmp(isset($_POST['save']),'SAVE')==0)
if(isset($_POST['save']))	
{
		
	$d_don_id = $_POST['don_id'];
	//$d_name = $_POST['name'];
	$d_date = $_POST['require_date'];
	$d_blood_group = $_POST['blood_group'];
	$d_blood_type = $_POST['blood_type'];
	$d_quantity = $_POST['quantity'];
	$d_patient = $_POST['patient_info'];
	$d_contact = $_POST['contact'];
    $d_location = $_POST['location'];
	
	
   //echo $d_don_id;
	// Insert data into mysql 
	$sql=mysqli_query($con, "INSERT INTO blood_req (User_ID, Required_date,Blood_Group,Blood_Type, Quantity, Patient_info, Contact, Location)VALUES
('$d_don_id', '$d_date', '$d_blood_group','$d_blood_type',$d_quantity ,'$d_patient', $d_contact, '$d_location')");
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




