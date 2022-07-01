<html>
<head>
    <title>Login</title>
    <link href="css/menu.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/footercollapse.css" rel="stylesheet">
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
	
	tr:hover {
          background-color: #ffff99;
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

            <a class="active" href="/bloodbank/partner.php">Partner</a>

        </div>


    </div>
    <!-- Body Page -->
    <div id="main-container"
         style="clear: both; height: auto; min-height: 600px; ">
        <h3> Our Partners</h3>
        <table style="width: 100%" border="1"  align="center" cellpadding="" >
            <thead>
            <tr>
                <th style="background-color: #b81900">Name</th>
                <th style="background-color: #b81900">Location</th>
            </tr>
            </thead>

            <tr>
                <td>Dhaka Medical College</td>
                <td>Dhaka</td>
            </tr>
            <tr>
                <td>Bangladesh Red Crescent Society</td>
                <td>Dhaka</td>
            </tr>
        </table>


    </div>
    <!-- Footer Page -->
    <div id ="footer" style="height: 80px">
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








