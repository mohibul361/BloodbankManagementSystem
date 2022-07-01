
<html>
<head>
  <title>Home</title>
  <link href="css/menu.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet"> 
  <link href="css/slide.css" rel="stylesheet"> 
   <link href="css/footercollapse.css" rel="stylesheet">
<link href="css/navmenu.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">
   <style>
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
    

#search{
	float: right;

  font-size: 15px;
  border: none;
  cursor: pointer;	
}
.homebtn{
	float:right;
	 alignment: top;
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

<div id="top">
  <p align="right" style="font-family: Arial";><a href="/bloodbank/user_signup.php">Signup</a>/
        <a href="/bloodbank/login.php">Log in</a>
</div>


<div class="container">

		<!-- Header -->
		<div id="header">
			<img style="height:140px; width:1200px" src="images/bbanner.png" />
		</div>
		<!-- Menu Page -->

		<div style="background-color: #FCFCFC; background-color: #DFDFDF">
            <div class="navbar">
               <a class="menu-active" href="/bloodbank/home.php">Home</a>
                <a href="/bloodbank/user_signup.php">Sign Up </a>
                <a href="/bloodbank/login.php">Login</a>
                <a href="/bloodbank/gallery.php">Gallery</a>
				<a href="/bloodbank/status.php">Blood Availability</a>
				<a href="/bloodbank/donation_types.php">Types of Donation</a>
				<div id="search">
						<form method="POST" action="search.php">
							<input type="text" name="q" placeholder="blood search">
							<input type="submit" name="search" value="Search">
						</form>	
					</div>
				
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
				
				<!-- blood search -->
					
    

</div>      

		<!-- Body Page -->
	<div id="main-container"
			style="clear: both; height: auto; min-height: 800px; ">
			
			 <p><img src="images/drop.jpg" alt="camp" style="width:200px; height:200px; margin-right:15px; margin-bottom:15px; float:left;"> Blood is universally recognized as the most precious element that sustains life. It saves innumerable lives across the world in a variety of conditions. The need for blood is great - on any given day, approximately 39,000 units of Red Blood Cells are needed. More than 29 million units of blood components are transfused every year.
                Donate Blood  Despite the increase in the number of donors, blood remains in short supply during emergencies, mainly attributed to the lack of information and accessibility.
                We positively believe this tool can overcome most of these challenges by effectively connecting the blood donors with the blood recipients.</p>
            <!-- collapse body -->
                   <h3>About Blood Types</h3>
                    
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
					
					<button class="collapsible" style="margin-top:20px">Who can give blood ?</button>
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

      

		<!-- Footer Page -->
		<div id ="footer" style="height: 80px">
            <p align="center"> @UNISA 2019,All Right Reserved <p>

            <nav id="footer-nav">
                <ul id="footer-nav-list">
                    <li id="footer-nav-item"; style="font-family: Arial, Helvetica, sans-serif">
                        <a href="/bloodbank/medical.php " class="footer-nav-link" title="Contact us" target="_top">
                           Our Medical Teams
                        </a>
                    </li>
                    <li id="footer-nav-item"; style="font-family: Arial, Helvetica, sans-serif">
                        <a href="/bloodbank/contact.php" class="footer-nav-link" title="Contact Us" target="_top">
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
                        <a href="/bloodbank/feedback.php " class="footer-nav-link"  title="feedback" target="_top">
                            Feedback
                        </a>
                    </li>


                </ul>
            </nav>


		</div>
	</div>

    <!-- collapse body -->
    <script>
        var coll = document.getElementsByClassName("collapsible");
        var i;

        for (i = 0; i < coll.length; i++) {
            coll[i].addEventListener("click", function() {
                this.classList.toggle("active");
                var content = this.nextElementSibling;
                if (content.style.maxHeight){
                    content.style.maxHeight = null;
                } else {
                    content.style.maxHeight = content.scrollHeight + "px";
                }
            });
        }
    </script>


</body>
</html>
<?php

?>






