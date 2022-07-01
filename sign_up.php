<?php
session_start();
?>
<html>
<head>
  <title>Sign Up</title>
 <link href="css/menu.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <link href="css/slide.css" rel="stylesheet">
    <link href="css/footercollapse.css" rel="stylesheet">
	<link href="css/navmenu.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"> </script>
	 

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
#info {
	float:left;
	padding: 10px;
	border: 1px solid lightgrey;
}

</style>

<body>
<!-- top-link -->
<div id="top">
	<?php    
		if(isset($_SESSION['username'])) {
			$name = $_SESSION['username'];													
		}
	?>
	<?php
		if(!isset($_SESSION['username'])) {
			echo "<span style=float:right;> <a href=/bloodbank/login.php>Login</a></span>";
		 
		}
	?>
	<?php
		if(isset($_SESSION['username']))
		{
			echo "<span style=float:right;>Welcome ".$name.",";
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

		</div>
		<!-- Body Page -->
		<div id="main-container" style="clear: both; height: auto; min-height: 800px; ">
		<h3>Member/Staff Registration</h3>
			<div id="registration" style="float:left; width:50%">
				<form action="/bloodbank/sign_up.php" method="post"  onSubmit = "return checkPassword(this)">
					
					<table width="100%" border="0" cellspacing="5" cellpadding="5">

						<tr>
							<td>Name</td>
							<td><input name="name" placeholder="Enter Your Name"  required></td>
						</tr>
						<tr>
							<td>Email</td>
							<td><input name="email" placeholder="Enter Email" name="email" required></td>
						</tr>
						 <td>Type of user</td>
						  <td>
							 <select name="user_type">
							  <option value="person">Person</option>					
							  <option value="organization">Organization</option>
							</select>			  
							</td>
							</tr> 
						 <tr>
							<td>Gender</td>
							<td><input type="radio" name="gender" value="Male" checked name="G">
							  Male
								<input type="radio" name="gender" value="Female" checked name="G">
							Female </td>
						  </tr>
							
						   <tr>
							  <td>Blood Group</td>
							  <td>
								 <select name="blood_group">
								  <option value="A+">A+</option>
								  <option value="B+">B+</option>
								  <option value="A-">AB-</option>
								  <option value="B-">AB+</option>
								  <option value="O+">O+</option>
								  <option value="O-">O-</option>
								</select>			  
								</td>
							</tr>
							<tr>	
							  <td>District</td>
							  <td>
								 <select name="district">
								 <option value="Select--">--Select--</option>
								  <option value="Dhaka">Dhaka</option>
								  <option value="Mymensingh">Mymensingh</option>
								  <option value="Jamalpur">Jamalpur</option>
								  <option value="Jessore">Jessore</option>
								  <option value="Cumilla">Cumilla</option>
								  <option value="Sylhet">Sylhet</option>
								   <option value="Chittagong">Chittagong</option>
								</select>			  
								</td>
							</tr> 
						  <tr>
							<td>Mobile No </td>
							<td><input name="mobile_no" placeholder="Enter Mobile Number" name="mobile" required></td>
						  </tr>			  			  
						 <tr>
                        <td>Date of Birth</td>
                        <td><input type="date" name="dob" required></td>
                    </tr>
						
						<tr>
							<td>Password</td>
							<td><input type="password" name="password1" placeholder="Enter Password" required></td>
						</tr>
						<tr>
							<td>Repeat Password</td>
							<td><input type="password" name="password2" placeholder="Repeat Password" required></td>
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
			<script>
            // Function to check Whether both passwords 
            // is same or not. 
            function checkPassword(form) { 
                password1 = form.password1.value; 
                password2 = form.password2.value; 
  
                // If password not entered 
                if (password1 == '') 
                    alert ("Please enter Password"); 
                      
                // If confirm password not entered 
                else if (password2 == '') 
                    alert ("Please enter confirm password"); 
                      
                // If Not same return False.     
                else if (password1 != password2) { 
                    alert ("\nPassword did not match: Please try again...") 
                    return false; 
                } 
  
                // If same return True. 
                
            } 
        </script> 
			</div>
			<div id="info">
				<p>This service is for whole blood donors who donate in Bangladesh only.</p>
				<hr width="100%" size="3"></hr>

				<p>Already a member? <a href="/bloodbank/login.php">Log In</a>.</p>
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

</body>
</html>

<?php
require_once('db_connection.php');
#if(strcmp(isset($_POST['save']),'SAVE')==0)
if(isset($_POST['save']))	
{
	//echo"HELLO";
            $d_name = $_POST['name'];
            $d_email = $_POST['email'];  				
            $d_user_type = $_POST['user_type'];  
			$d_gender = $_POST['gender']; 			
			$d_blood_group = $_POST['blood_group'];
			$d_district = $_POST['district'];		   
			$d_mobile_no = $_POST['mobile_no'];
			$d_dob = $_POST['dob'];			
			$d_password1 = $_POST['password1'];
			$d_password2 = $_POST['password2'];

            $sql = mysqli_query($con, "INSERT INTO user (Name, Email, Gender, District, Blood_Group, User_Type, Mobile_No, DOB, Password, Repeat_Pass, Role)VALUES
			('$d_name', '$d_email', '$d_gender', '$d_district', '$d_user_type',  '$d_blood_group', '$d_mobile_no', '$d_dob', '$d_password1', '$d_password2', 'public')");

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






