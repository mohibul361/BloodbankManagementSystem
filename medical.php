<html>
<head>
    <title>Medical Team</title>
    <link href="css/menu.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/footercollapse.css" rel="stylesheet">
    <link href="css/imagestyle.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
    table, th, td {
        border: 1px solid black;
        border-collapse: collapse;
    }
    th, td {
        padding: 5px;
    }
	
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 200px;
  margin-right:25px;
  text-align: center;
  font-family: arial;
  float:left;
}

.title {
  color: grey;
  font-size: 18px;
}

button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

a {
  text-decoration: none;
  font-size: 22px;
  color: black;
}

button:hover, a:hover {
  opacity: 0.7;
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
            <a href="/bloodbank/home.php">Home</a>
            <a href="/bloodbank/gallery.php">Gallery</a>
            <a href="/bloodbank/contact.php">Contact</a>
            <a href="/bloodbank/sign_up.php">Sign Up </a>

            <a href="/bloodbank/login.php">LogIn </a>


           <div class="dropdown">
                    <button class="dropbtn">Collect Blood
                        <i class="fa fa-caret-down"></i>
                    </button>
                    <div class="dropdown-content">
                       <a href="/bloodbank/sign_up.php">Sign up</a>
                        <a href="/bloodbank/blood_request.php">Blood Requisition</a>
                        <a href="/bloodbank/campaign.php">Join Campaign</a>
                    </div>
                </div>
        </div>


    </div>
    <!-- Body Page -->
    <div id="main-container"
         style="clear: both; height: auto; min-height: 900px; ">
        <h3> Our Medical Team Members</h3>
        <!-- Gallery Grid -->
			<div class="card">
			  <img src="images/abir.jpg" alt="Mountains"style="width:100%">
			  <h2>Saruar</h2>
			  <p class="title">Hematologist</p>
			  <p>Dhaka Medical</p>
			</div>
			
			<div class="card" padding="8px">
			  <img src="images/abir.jpg" alt="Mountains"style="width:100%">
			  <h2>Abir</h2>
			  <p class="title">Coalugation Disorders</p>
			  <p>Mymensingh Medical</p>
			</div>
			<div class="card" padding="8px">
			  <img src="images/abir.jpg" alt="Mountains"style="width:100%">
			  <h2>Abir</h2>
			  <p class="title">CEO & Founder</p>
			  <p>Bloodbank System</p>
			</div>
        </div>
    </div>
    <!-- Footer Page -->
    <div id ="footer" >
        <p align="center"> @UNISA 2019,All Right Reserved <p>

            <nav id="footer-nav">
                <ul id="footer-nav-list">
                    <li id="footer-nav-item"; style="font-family: Arial, Helvetica, sans-serif">
                        <a href=" " class="footer-nav-link" title="Contact us" target="_top">
                            Our Medical Teams
                        </a>
                    </li>
                    <li id="footer-nav-item"; style="font-family: Arial, Helvetica, sans-serif">
                        <a href=" " class="footer-nav-link" title="Contact us" target="_top">
                            Blood Requisition
                        </a>
                    </li>
                    <li id="footer-nav-item"; style="font-family: Arial, Helvetica, sans-serif">
                        <a href=" " class="footer-nav-link" title="Contact us" target="_top">
                            Compaign For Blood
                        </a>
                    </li>
                    <li id="footer-nav-item"; style="font-family: Arial, Helvetica, sans-serif">
                        <a href=/bloodbank/Partner.php class="footer-nav-link" title="Our partners" target="_top">
                            Our Partners
                        </a>
                    </li>
                    <li id="footer-nav-item"; style="font-family: Arial, Helvetica, sans-serif">
                        <a href=" " class="footer-nav-link"  title="Contact us" target="_top">
                            Feedback
                        </a>
                    </li>


                </ul>
            </nav>


    </div>
</div>


</body>
</html>








