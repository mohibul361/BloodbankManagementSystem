<?php
session_start();
?>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Create/Edit Donor</title>
 <link href="css/menu.css" rel="stylesheet">
   <link href="css/style.css" rel="stylesheet">
  <link href="css/menu.css" rel="stylesheet">
    <link href="css/footercollapse.css" rel="stylesheet">
	<link href="css/navmenu.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<style>
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
 #top{
            width: auto;
            height: 30px;
            background-color: #aab7d1;
            alignment: top;
            text-decoration-color: red;
        }
</style>
</head>
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

		</div>
		<!-- Body Page -->
		<div id="main-container"
			style="clear: both; height: auto; min-height: 700px; ">
			<div id="registration" style="float:left; width:50%">
			<form action="/bloodbank/donor.php" method="post" enctype="multipart/form-data">
				<h3>Create or Edit Donor</h3>			
				<table width="100%" border="0" cellspacing="5" cellpadding="5">			  
				  <tr>
					<td>Name</td>
						<td><input name="name" type="text" placeholder="Enter Name.." value=""></td>
				  </tr>
						<tr>
							<td>Email</td>
							<td><input name="email" placeholder="Enter Email.." name="email" required></td>
						</tr>
				 <tr>
					<td>Gender</td>
					<td><input type="radio" name="gender" value="MALE" checked name="G">
					  MALE
						<input type="radio" name="gender" value="FEMALE" checked name="G">
					FEMALE </td>
				  </tr>
				  <tr>
				  <td>Blood Group</td>
				  <td>
					 <select name="blood_group">
					  <option value="A+">A+</option>
					  <option value="B+">B+</option>
					  <option value="AB+">AB+</option>
					  <option value="A-">A-</option>
					  <option value="B-">B-</option>
					  <option value="O+">O+</option>
					  <option value="O-">O-</option>
					</select>			  
					</td>
					</tr> 
				  <tr>
					<td>Address</td>
					<td><textarea input name="address" rows=1 cols=20 wrap="on" value=""/></textarea></td>
				  </tr>
				  <tr>
					<td>Mobile No </td>
					<td><input name="mobile_no" type="text" value=""/></td>
				  </tr>

                    <tr>
                        <td>Weight</td>
                        <td><input name="weight" type="text" value=""/></td>
                    </tr>
				  <tr>
					<td>Age</td>
					<td><input type="text" value="" name="age"></td>
				  </tr>
				  <tr>
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
                        <td>Upload Photo </td>
                        <td><input type="file" name="image"></td>
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
			
			</div>
			<div id="pic">
				<p style="background-color: lightgray" >Blood Transfusion Chart</p>
				<hr width="100%" size="2"></hr>

				<p><img src="images/donor.png" alt="camp" style="width:450px; height:300px; margin-right:15px; margin-bottom:15px; float:right;"> </p>
			</div>
		
		</div>
		
	</div>
	
		<!-- Footer Page -->
		<div id ="footer">
            <p align="center"> @UNISA 2019, All Right Reserved <p>
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
                        <a href=/bloodbank/Partner.php class="footer-nav-link" title="Our partners" target="_top">
                            Our Partners
                        </a>
                    </li>
                    <li id="footer-nav-item"; style="font-family: Arial, Helvetica, sans-serif">
                        <a href="/bloodbank/feedback.php " class="footer-nav-link"  title="Contact us" target="_top">
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
		
	if(isset($_POST['save']))	
{
	//echo"HELLLLO";
		
	$d_name = $_POST['name'];
	$d_email = $_POST['email'];
	$d_gender = $_POST['gender'];
    $d_blood_group = $_POST['blood_group'];
    $d_address = $_POST['address'];
	$d_mobile = $_POST['mobile_no'];
    $d_weight = $_POST['weight'];
    $d_age = $_POST['age'];
    $d_center = $_POST['center'];
    //$d_image = $_POST['image'];

	// Insert data into mysql 
	$sql=mysqli_query($con, "INSERT INTO donor VALUES(null,'$d_name', '$d_email', '$d_gender', '$d_blood_group','$d_address','$d_mobile',$d_weight,'$d_age', '$d_center')");

// If upload button is clicked ...
 
if (isset($_POST['save'])) {
  	// Get image name
  	$image = $_FILES['image']['name'];


  	// image file directory
  	$target = "Donor_photo/".basename($image);

  	$sql = mysqli_query($con, "INSERT INTO images VALUES (null, '$image')");

  	if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
  		$msg = "Image uploaded successfully";
  	}else{
  		$msg = "Failed to upload image";
  	}
  }
  $result = mysqli_query($con, "SELECT * FROM images");
  

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