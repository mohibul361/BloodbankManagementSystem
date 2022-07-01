
<!DOCTYPE html>
<html>
<head>
  <title>Types Of Donation</title>
  <link href="css/menu.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
   <link href="css/footercollapse.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">


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
#hometext{
	font-size: 1rem;
    line-height: 1.125;
    margin: 40px;
    word-wrap: break-word;
	outline: none;
}
.mySlides {
	display:none;	
	width: 1200px;
	height: 250px;
	}
	.imgslide{
		height: 250px;
		width: 1200px;
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
		
		<div style="background-color: #FCFCFC; background-color: #DFDFDF">
            <div class="navbar">
                 <a href="/bloodbank/home.php">Home</a>
                <a href="/bloodbank/user_signup.php">Sign Up </a>
                <a href="/bloodbank/login.php">Login</a>
                <a href="/bloodbank/gallery.php">Gallery</a>
				<a href="/bloodbank/status.php">Blood Availability</a>
				<a class="menu-active" href="/bloodbank/donation_types.php">Types of Donation</a>
				
          
</div>
		<!-- Body Page -->
		<div id="main-container"
			style="clear: both; height: auto; min-height: 600px; ">	
				<!-- Body text -->	
		<p><img src="images/home.jpg" alt="camp" style="width:200px; height:200px; margin-right:25px; margin-bottom:15px; margin-top: 10px; float:left;">
	                
		<h3>Different Types of Blood Donation</h3>
						
				<div id=hometext>
					<ul>
						
						<li style="margin-top:15px">
							<strong>Plasma donation</strong> also known as apheresis. Plasma is the liquid part of the blood. Plasma is separated from the other components by a special machine, 
							and the red blood cells are returned to the donor in cycles throughout the donation.
							This is particularly good for donors of type AB, which is the universal donor for plasma.
							Plasma can be donated every 4 weeks or more.
						</li>
						<li style="margin-top:15px">
							<strong>Directed donation</strong> is a friend or family member that is approved to donate for a specific patient. If the blood type is compatible, 
							the unit will be reserved for that patient. Directed donations require the approval of the patient’s physician 
							and the patient must approve the names of the directed donors. Extra fees apply.
						</li>
						<li style="margin-top:15px">
							<strong>Red Blood Cell</strong> Automated donation can allow one or two units of red blood cells to be collected at one sitting. To qualify for double red cell donation, donors must meet special
							criteria including higher hemoglobin/hematocrit. Double red cell donation can only be done once every 112 days (16 weeks) or more. Double red cell donation 
							is ideal for donors who want to minimize their trips to the blood center and who are blood type O.
						</li>
						<li style="margin-top:15px">
							<strong>Donated tissue </strong>such as skin, bones and eyes, can save or dramatically improve the lives of many people suffering from illness or injury. 
							Thanks to the generosity of our donors and their families, we collect tissue from thousands of living and deceased donors every year.
							Annually, this provides around 8,500 life-changing implants for 2,600 patients.
						</li>
					</ul>

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
                            <a href="/bloodbank/Partner.php" class="footer-nav-link" title="Our partners" target="_top">
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
