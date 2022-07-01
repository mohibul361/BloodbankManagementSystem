<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Blood Available</title>
  <link href="css/menu.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
    <link href="css/footercollapse.css" rel="stylesheet">

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
.circle {
  margin: 36px;
  display: inline-block;
  padding: 16px;
  text-align: center;
  width: 180px;
  height: 180px;
  border-radius: 50%;
  border: 2px solid #1d2087;
}

.circle::before,
.circle::after {
  position: absolute;
  z-index: -1;
  display: block;
  content: '';
}
.circle,
.circle::before,
.circle::after {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  -webkit-transition: all .5s;
  transition: all .5s;
}

.circle {
  position: relative;
  z-index: 2;
  background-color: red;
  border: 2px solid #f44174;
  color: #41f44c;
  line-height: 50px;
  overflow: hidden;
}

.circle:hover {
  color: red;
}
.circle::after {
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  border-radius: 50%;
  -webkit-transform: scale(.5);
  transform: scale(.5);
}
.circle:hover::after {
  background: lightgray;
  border-radius: 50%;
  -webkit-transform: scale(.9);
  transform: scale(.9);
}

.circle1 {
  opacity: 0.4;
}

.circle2 {
  opacity: 0.6;
}

.circle3 {
  opacity: 0.8;
}

.circle a {
  text-decoration: none;
  color: #1d2087;
}

.circle h2 {
  font-size: 60px;
}

.circle h2 small {
  color: #1d2087;
}

.circle p {
  font-size: 24px;
  line-height: 26px;
}
</style>
</head>
<body>
	<div class="container">
		<!-- Header -->
		<div id="header">
			<img style="height:140px; width:1200px" src="images/bbanner.png" />
		</div>
		<!-- Menu Page -->
		<!-- <div style="background-color: #FCFCFC; overflow: hidden; background-color: #013D6C;"> -->
		<div style="background-color: #FCFCFC; background-color: #DFDFDF">
            <div class="navbar">
                <a href="/bloodbank/home.php">Home</a>
                <a href="/bloodbank/user_signup.php">Sign Up </a>
                <a href="/bloodbank/login.php">Login</a>
                <a href="/bloodbank/gallery.php">Gallery</a>
				<a class="menu-active" href="/bloodbank/status.php">Blood Availability</a>
				<a href="/bloodbank/donation_types.php">Types of Donation</a>
            </div>

		</div>
		<!-- Body Page -->
		<body>
		<?php
			require_once('db_connection.php');				
		?>
			
		<div id="main-container"
			style="clear: both; height: auto; min-height: 700px; ">
		<h3>Blood Availability</h3>
			<div>				
			  <div style="float:left">
				<div class="circle circle3">
				<h2><?php
						$res = mysqli_query($con, "SELECT sum(Quantity) as quantity FROM collect_blood WHERE Blood_group='B+' ");
						$object= mysqli_fetch_object($res);
						echo $object->quantity; ?><p>B+</p>
				</h2>
				</div>
			  </div>
			  <div style="float:left">
				<div class="circle circle3">
				 <h2><?php
						$res = mysqli_query($con, "SELECT sum(Quantity) as quantity FROM collect_blood WHERE Blood_group='A+' ");
						$object= mysqli_fetch_object($res);
						echo $object->quantity; ?><p>A+</p>
				</h2>
				</div>
			  </div>
			  <div style="float:left">
				<div class="circle circle3">
				  <h2><?php
						$res = mysqli_query($con, "SELECT sum(Quantity) as quantity FROM collect_blood WHERE Blood_group='AB+' ");
						$object= mysqli_fetch_object($res);
						echo $object->quantity; ?><p>AB+</p>
				</h2>
				</div>
			  </div>
			   <div style="float:left">
				<div class="circle circle3">
				   <h2><?php
						$res = mysqli_query($con, "SELECT sum(Quantity) as quantity FROM collect_blood WHERE Blood_group='O-' ");
						$object= mysqli_fetch_object($res);
						echo $object->quantity; ?><p>O-</p>
					</h2>
				</div>
			  </div>
			  
			   <div style="float:left">
				<div class="circle circle3">
				  <h2><?php
						$res = mysqli_query($con, "SELECT sum(Quantity) as quantity FROM collect_blood WHERE Blood_group='AB-' ");
						$object= mysqli_fetch_object($res);
						echo $object->quantity; ?><p>AB-</p>
					</h2>
				</div>
			  </div>
			  
			   <div style="float:left">
				<div class="circle circle3">
				  <h2><?php
						$res = mysqli_query($con, "SELECT sum(Quantity) as quantity FROM collect_blood WHERE Blood_group='O+' ");
						$object= mysqli_fetch_object($res);
						echo $object->quantity; ?><p>O+</p>
				 </h2>
				</div>
			  </div>
			  
			  <div style="float:left">
				<div class="circle circle3">
				  <h2><?php
						$res = mysqli_query($con, "SELECT sum(Quantity) as quantity FROM collect_blood WHERE Blood_group='A-' ");
						$object= mysqli_fetch_object($res);
						echo $object->quantity; ?><p>A-</p>
					</h2>
				</div>
			  </div>
			  <div style="float:left">
				<div class="circle circle3">
				  <h2><?php
						$res = mysqli_query($con, "SELECT sum(Quantity) as quantity FROM collect_blood WHERE Blood_group='B-' ");
						$object= mysqli_fetch_object($res);
						echo $object->quantity; ?><p>B-</p>
					</h2>
				</div>
			  </div>
			  
			</div>			
		</div>
	
		<div style="clear:both"></div>
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

