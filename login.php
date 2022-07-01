<?php

require_once('db_connection.php');
session_start();
if(isset($_POST['login']))
{	
    $username = $_POST['username'];
	$password = $_POST['password'];	
	$res = mysqli_query($con, "select * from user where Name='$username' and Password = '$password'");
	$num_rows = mysqli_num_rows($res);
	if($num_rows){
        $row = mysqli_fetch_assoc($res);
        $username = $row['Name'];
		$role = $row['Role'];
        $_SESSION['username'] = $username;
		$_SESSION['role'] = $role;
		echo "session value :".$_SESSION['username'];
		header("location:welcome.php");
	}
	else
	{
		echo "<script>alert('Invalid User Name Or Password');</script>";
	}	
}
?>


<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <link href="css/menu.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
     <link href="css/footercollapse.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>
    #map-container { height: 300px }

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
	
	
	
	#login{
		width: 500px;
		margin-left: auto;
		margin-right: auto;
		position: relative;
	  text-align: center;
		 
	}
	body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}
.input-container {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  
  width: 400px;
 margin-top: 20px;
  margin-bottom: 15px;
}

.icon {
  padding: 10px;
  background: #e0442b;
  color: white;
  min-width: 50px;
  text-align: center;
}

.input-field {
  width: 100%;
  padding: 10px;
  outline: none;
}

.input-field:focus {
  border: 2px solid dodgerblue;
}

/* Set a style for the submit button */
.btn {
  background-color: #e0442b;
  color: white;
  padding: 15px 20px;
  border: none;
  cursor: pointer;
  width: 400px;
  float:left;
  opacity: 0.9;
}

.btn:hover {
  opacity: 5;
}

</style>
<body>
<!-- top-link -->
<div id="top">
    <p align="right" style="font-family: Arial";><a href="/bloodbank/sign_up.php">Sign up</a>/
        <a href="/bloodbank/login.php">Log in</a>
    </p>
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
             <!--   <a href="/bloodbank/admin_panel.php">Admin Panel</a> -->
                <a href="/bloodbank/home.php">Home</a>
                <a href="/bloodbank/user_signup.php">Sign Up </a>
                <a class="menu-active" href="/bloodbank/login.php">Login</a>
                <a href="/bloodbank/gallery.php">Gallery</a>
				<a href="/bloodbank/status.php">Blood Availability</a>
				<a href="/bloodbank/donation_types.php">Types of Donation</a>
				
            </div>


		</div>
		<!-- Body Page -->
		<div id="main-container"
			style="clear: both; height: auto; min-height: 600px; ">					
			<div id="login" >
				<h3 style="text-align:left">Log In</h3>				
				<form method="POST" action="/bloodbank/login.php">
					<div  class="input-container">
						<i class="fa fa-user icon"></i>
						<input class="input-field" type="text" placeholder="Username" name="username" required>
					  </div>

				  
					  <div class="input-container">
						<i class="fa fa-key icon"></i>
						<input class="input-field" type="password" placeholder="Password" name="password" required>
					  </div>
							<label style="float:left">
								<input type="checkbox"  checked="checked" name="remember"> Remember me
							</label>
					  <button type="submit" name="login" value="Login" class="btn">Log In</button>
				</form>
			</div>		
		</div>
        <div id ="footer" style="height: 80px">
            <p align="center"> @UNISA 2019, All Right Reserved <p>

                <nav id="footer-nav">
                    <ul id="footer-nav-list">
                        <li id="footer-nav-item"; style="font-family: Arial, Helvetica, sans-serif">
                            <a href="/bloodbank/medical.php " class="footer-nav-link" title="Teams" target="_top">
                                Our Medical Teams
                            </a>
                        </li>
                        <li id="footer-nav-item"; style="font-family: Arial, Helvetica, sans-serif">
                            <a href="/bloodbank/contact.php" class="footer-nav-link" title="Contact" target="_top">
                                Contact
                            </a>
                        </li>
                        <li id="footer-nav-item"; style="font-family: Arial, Helvetica, sans-serif">
                            <a href="/bloodbank/campaign.php " class="footer-nav-link" title="campaign" target="_top">
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
