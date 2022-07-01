<?php
session_start();
?>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Contact us</title>
  <link href="css/menu.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <link href="css/footercollapse.css" rel="stylesheet">
    <script src="scripts/jquery.js"></script>
    <script src="scripts/jquery-ui.min.js"></script>
    <link href="css/jquery-ui.min.css" rel="stylesheet">
     <script src="http://maps.google.com/maps/api/js?sensor=false"></script> 

	
    <script>
        function init_map() {
            var var_location = new google.maps.LatLng(23.795021, 90.402579);

            var var_mapoptions = {
                center: var_location,
                zoom: 14
            };

            var var_marker = new google.maps.Marker({
                position: var_location,
                map: var_map,
                title: "UNISA"});

            var var_map = new google.maps.Map(document.getElementById("map-container"),
                var_mapoptions);

            var_marker.setMap(var_map);

        }

        google.maps.event.addDomListener(window, 'load', init_map);

    </script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        #map-container{
			height: 300px;
			 border-radius: 25px;
			}

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
#rcorners {
  border-radius: 25px;
  background: #73AD21;
  padding: 20px; 
  width: 180px;
  height: 190px;
  margin-right:10px;
}

.fa {
  padding: 10px;
  font-size: 30px;
  width: 30px;
  text-align: center;
  text-decoration: none;
  margin: 5px 2px;
}

.fa:hover {
    opacity: 0.7;
}

.fa-facebook {
  background: #3B5998;
  color: white;
}

.fa-twitter {
  background: #55ACEE;
  color: white;
}

.fa-google {
  background: #dd4b39;
  color: white;
}



.fa-youtube {
  background: #bb0000;
  color: white;
}

    </style>
</head>
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

		<div style="background-color: #FCFCFC; background-color: #013D6C;">
            <div class="navbar">
                <a href="/bloodbank/home.php">Home</a>
                <a href="/bloodbank/sign_up.php">Sign Up </a>
                <a href="/bloodbank/login.php">Login</a>
                <a href="/bloodbank/gallery.php">Gallery</a>
                <a class="active"  href="/bloodbank/contact.php">Contact</a>


            </div>
        </div>

              <!--
/*					if(isset($_SESSION["username"])) {
						$name = $_SESSION["username"];
						echo "<li><a href=/bloodbank/donor.php>Create Donor</a></li>";
						echo "<li><a href=/bloodbank/donorlist.php>Donor List</a></li>";
					}
                */?>

                -->
              <!--   if(!isset($_SESSION["username"])) {
                    echo "<li><a href=/bloodbank/login.php>Login</a></li>";
                }
                */?>


/*            if(isset($_SESSION["username"]))
            {
                echo "<span style='float:right'>Welcome ".$name.","
                */?>
                <a href="/bloodbank/logout.php">Logout</a</span>
                -->



		<!-- Body Page -->
		<div id="main-container"
			style="clear: both; height: auto; min-height: 600px; ">
			<h3>Our Location</h3>
            <div id="map-outer">
                <div id="rcorners" style="float:left">
                    <address>
                        House 76 & 78, Rd No.14, Block:B<br>
                        Banani, Dhaka 1212, Bangladesh<br>
                        <p style="font-weight:800">Website:</p> www.unisouthasia.com<br>
						 <p style="font-weight:800">Email:</p> mail@unisouthasia.com<br>
                        <p style="font-weight:800"> Phone:</p><p>01686-265125</p>
                    </address>
					
					
					<h2>Connect With </h2>
					<hr>
						<!-- Add font awesome icons -->
						<a href="http://facebook.com" class="fa fa-facebook"></a>
						<a href="http://twitter.com" class="fa fa-twitter"></a>
						<a href="http://google.com" class="fa fa-google"></a>
						<a href="http://youtube.com" class="fa fa-youtube"></a>
      
                </div>
                <div id="map-container"></div>
            </div>
		</div>
		<!-- Footer Page -->
		<div id ="footer" style="red">
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
	</div>
</body>
</html>
<?php
?>






