
<html>
<head>
  <title>Donor List</title>
	<link href="css/menu.css" rel="stylesheet">
   <link href="css/style.css" rel="stylesheet">
</head>
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
<body>
	<div class="container">
		<!-- Header -->
		<div id="header">
			<img style="height:140px; width:1200px" src="images/bbanner.png" />
		</div>
		<!-- Menu Page -->
        <div style="background-color: #FCFCFC; background-color: #DFDFDF">
            <div class="navbar">
                <a  href="/bloodbank/home.php">Home</a>
                <a  href="/bloodbank/donor.php">Create Donor</a>
                <a href="/bloodbank/sign_up.php">Sign Up </a>
                <a href="/bloodbank/login.php">Login</a>

                <div class="dropdown">
                    <button class="dropbtn">Collect Blood
                        <i class="fa fa-caret-down"></i>
                    </button>
                    <div class="dropdown-content">
                        <a href="/bloodbank/sign_up.php">Sign up</a>
                        <a href="#">Blood Requisition</a>
                        <a href="#">Our Partners</a>
                    </div>
                </div>

            </div>
		<!-- Body Page -->
		<div id="main-container"
			style="clear: both; height: auto; min-height: 600px; ">
			
			
			
								
		</div>
		<!-- Footer Page -->
		<div id ="footer"></div>
	</div>
</body>
</html>
