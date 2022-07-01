
<!DOCTYPE html>
<html>
<head>
  <title>Home</title>
  <link href="css/menu.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <link href="css/footercollapse.css" rel="stylesheet">
<link href="css/navmenu.css" rel="stylesheet">
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
		<!-- <div style="background-color: #FCFCFC; overflow: hidden; background-color: #013D6C;"> -->
		<div style="background-color: #FCFCFC; background-color: #DFDFDF">
            <div class="navbar">
                 <a href="/bloodbank/home.php">Home</a>
                <a href="/bloodbank/user_signup.php">Sign Up </a>
                <a href="/bloodbank/login.php">Login</a>
                <a href="/bloodbank/gallery.php">Gallery</a>
				<a href="/bloodbank/status.php">Blood Availability</a>
				
				
            </div>
				<div style="align:center">
				<div class="w3-content w3-section" style="max-width:1200px">
				  <img class="mySlides" src="images/slide1.jpg">
				  <img class="mySlides" src="images/slide2.jpg">
				  <img class="mySlides" src="images/bd.jpg">
				</div>
				</div>
					<script>
					var myIndex = 0;
					carousel();

					function carousel() {
					  var i;
					  var x = document.getElementsByClassName("mySlides");
					  for (i = 0; i < x.length; i++) {
						x[i].style.display = "none";  
					  }
					  myIndex++;
					  if (myIndex > x.length) {myIndex = 1}    
					  x[myIndex-1].style.display = "block";  
					  setTimeout(carousel, 2000); // Change image every 2 seconds
					}
					</script>

</div>
		<!-- Body Page -->
		<div id="main-container"
			style="clear: both; height: auto; min-height: 1000px; ">	
				<!-- Body text -->	
		<p><img src="images/drop.jpg" alt="camp" style="width:200px; height:200px; margin-right:25px; margin-bottom:15px; margin-top: 10px; float:left;">Blood is universally recognized as the most precious element that sustains life. It saves innumerable lives across the world in a variety of conditions. The need for blood is great - on any given day, approximately 39,000 units of Red Blood Cells are needed. More than 29 million units of blood components are transfused every year.
                Donate Blood  Despite the increase in the number of donors, blood remains in short supply during emergencies, mainly attributed to the lack of information and accessibility.
                We positively believe this tool can overcome most of these challenges by effectively connecting the blood donors with the blood recipients.</p>		
		<h3>Different types of blood donation</h3>
						
				 <!-- collapse body -->
                    <h3>About blood types</h3>
                    
                    <button class="collapsible" >A positive(A+)</button>
                    <div class="content">
                        <p>As an A Positive donor you are incredibly important to maintaining the blood supply in our community. A Positive is the second most common blood type and therefore just as many patients need this blood type. 1 in 3 people have A+ blood (approximately 35.7% of the population).</p>
                    </div>
                    <button class="collapsible">A Negetive(A-)</button>
                    <div class="content">
                        <p>Only 6.3% of the population has A Negative blood. Because your blood is rare, it is important to maintain sufficient supplies for our community and local patients.1 in 16 people have A- blood (approximately 6.3% of the population).</p>
                    </div>
                    <button class="collapsible">B Positive(B+)</button>
                    <div class="content">
                        <p>As a B Positive donor, you are very important to maintaining the blood supply in our community. B+ is the third most common occurring blood type.1 in 12 people have B+ blood (approximately 8.5% of the population).</p>
                    </div>
                    <button class="collapsible">O Positive(O+)</button>
                    <div class="content">
                        <p>As an O Positive donor you are incredibly important to maintaining the blood supply in our community. O Positive is the most common blood type and therefore needed by so many patients.1 in 3 people have O+ blood (approximately 37.4% of the population).</p>
                    </div>
            <button class="collapsible">O Negative(O-)</button>
            <div class="content">
                <p>Your blood type is determined by genes inherited from your parents. Whether your blood type is rare, common or somewhere in between, your donations are vital in helping save and improve lives.</p>
            </div>
                    <button class="collapsible">AB positive(AB+)</button>
                    <div class="content">
                        <p>As an AB blood donor, you have a unique opportunity to enhance your generous “gift of life”. People with AB Negative (.6% of the population) and AB Positive (3.4%) are potential universal plasma donors.  You may not know, but there is a special need for AB Plasma.</p>
                    </div>
            <button class="collapsible">AB Negative(AB-)</button>
            <div class="content">
                <p>AB negative is the rarest blood type accounting for just 1% of the donor population. In total only 3% of donors belong to the AB blood group.</p>
            </div>
					
					<button class="collapsible">Who can give blood</button>
				<div class="content">
					<p >Who can give blood ?</p>
					<ul>
						 <li>Must be you fit and healthy and weight between 7 stone 12 lbs and 25 stone, or 50kg and 160kg</li>
						 <li>Must be aged between 17 and 66 (or 70 if you have given blood before)</li>
						<li>Not permit cancer other than basal cell carcinoma or cervical carcinoma insitu (CIN)</li>
						<li>Not permit self-injected drugs (non-prescription)</li>
						<li>Not permit if you have high-risk group for AIDS</li>
					</ul>
				</div>
				<button class="collapsible">Restricted Donors</button>
				<div class="content">
					<p>The following people are not allowed to donate blood in Bangladesh..</p>
					<ol>
						 <li>Those who received dental treatment that resulted in bleeding within the past 3 days.</li>
						 <li>Anyone who has entered Bangladesh within the past 4 weeks.</li>
						<li>Anyone who got a body piercing in the past 1 month.</li>
						<li>Any man who has had sexual contact with another man in the past 6 months.</li>
						<li>Anyone who is currently pregnant or breastfeeding.</li>
					</ol>
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
