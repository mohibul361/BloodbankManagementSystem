<?php
session_start();
?>
<html>
<head>
  <title>Gallary</title>
  <link href="css/menu.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
    <link href="css/imagestyle.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
                <a class="menu-active" href="/bloodbank/gallery.php">Gallery</a>
				<a href="/bloodbank/status.php">Blood Availability</a>
				<a href="/bloodbank/donation_types.php">Types of Donation</a>
                
            </div>
               
		</div>

		<!-- Body Page -->
		<div id="main-container"
			style="clear: both; height: auto; min-height: 900px; ">
			<h3>Images</h3>
			

            <!-- Gallery Grid -->
            <div class="row">
                <div class="column">
                    <div class="content">
                        <img src="images/photo.jpg" alt="Mountains" style="width:100%">
                        <h3>Campaign</h3>
       
                        <p>A voluntary blood donation camp was held at University of South Asia, Banani on May 09, 2019. Vice Chancellor attend on the camp</p>

                    </div>
                </div>
                <div class="column">
                    <div class="content">
                        <img src="images/photo.jpg" alt="Lights" style="width:100%">
                        <h3>Campaign</h3>
                        <p>A voluntary blood donation camp was held at University of South Asia, Banani on May 09, 2019. Vice Chancellor attend on the camp</p>
                    </div>
                </div>
                <div class="column">
                    <div class="content">
                        <img src="images/photo.jpg" alt="Nature" style="width:100%">
                        <h3>Campaign</h3>
                        <p>A voluntary blood donation camp was held at University of South Asia, Banani on May 09, 2019. Vice Chancellor attend on the camp</p>
                    </div>
                </div>
                <div class="column">
                    <div class="content">
                        <img src="images/photo.jpg" alt="Mountains" style="width:100%">
                        <h3>Campaign</h3>
                        <p>A voluntary blood donation camp was held at University of South Asia, Banani on May 09, 2019. Vice Chancellor attend on the camp</p>
                    </div>
                </div>

                <div class="column">
                        <div class="content">
                            <img src="images/photo.jpg" alt="Nature" style="width:100%">
                            <h3>Campaign</h3>
                            <p>A voluntary blood donation camp was held at University of South Asia, Banani on May 09, 2019. Vice Chancellor attend on the camp</p>
                    </div>

                </div>
                <!-- END GRID -->
            </div>



		</div>
		<!-- Footer Page -->
		<div id ="footer"></div>
	</div>


</body>
</html>






