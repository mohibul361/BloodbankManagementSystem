<?php 
require_once('db_connection.php');

?>

<!DOCTYPE html>
<html>
<head>
  <title>Search</title>
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
#box{
	width:500px;
	height:500px;
	background-color: lightgray;
	float:center;
	
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
                <a href="/bloodbank/login.php">Login</a>
                <a href="/bloodbank/gallery.php">Gallery</a>
				<a href="/bloodbank/status.php">Blood Availability</a>
				
				
            </div>


		</div>
		<!-- Body Page -->
		<div id="main-container"
			style="clear: both; height: auto; min-height: 600px; ">					
		<div id="box">
			<h3>Blood Group Available </h3>
			<?php
					if(isset($_POST['search']))
				{
						$q = $_POST['q'];
						
						$query = mysqli_query($con, "SELECT * FROM collect_blood WHERE `Blood_group` LIKE '%$q%' "); 
						
						$count = mysqli_num_rows($query);
						if($count == "0")
						{
							$output = '<h3>No result found!</h3>';
						}
							else
						{
								while($row = mysqli_fetch_array($query))
							{
								$s = $row['Blood_group']; 
								$output .= '<h3>'.$s.'</h3><br>';
							
							}
						}
				}				
				echo $output;
			
			?>	
	</div>		
			
		</div>
        <div id ="footer" style="height: 80px">
            <p align="center"> @UNISA 2019, All Right Reserved <p>

                <nav id="footer-nav">
                    <ul id="footer-nav-list">
                        <li id="footer-nav-item"; style="font-family: Arial, Helvetica, sans-serif">
                            <a href="/bloodbank/medical.php " class="footer-nav-link" title="Contact us" target="_top">
                                Our Medical Teams
                            </a>
                        </li>
                        <li id="footer-nav-item"; style="font-family: Arial, Helvetica, sans-serif">
                            <a href="/bloodbank/contact.php" class="footer-nav-link" title="Contact" target="_top">
                                Contact
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
