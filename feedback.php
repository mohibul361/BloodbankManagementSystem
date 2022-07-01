
<html>
<head>
    <title>feedback</title>
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
    #feedback{
        box-shadow: 0px 1px 2px 2px rgba(0, 0, 0, 0.3);
        width: 400px;
        margin: 0 auto;
        #			background-color:lightgray;
        padding: 10px;
        margin-top:50px;
    }
</style>
<body>
<!-- top-link -->
<div id="top">
 
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


            
        </div>


    </div>
    <!-- Body Page -->
    <div id="main-container"
         style="clear: both; height: auto; min-height: 600px; ">
        <div id="feedback">
            <h3>Feedback</h3>
            <form method="POST" action="/bloodbank/feedback.php">

                    Your name: <br>
                    <input type="text" name="name"><br>
                    <br>

                    Your email: <br>
                    <input type="text" name="email" required><br>
                    <br>

                    Your comments: <br>
                    <textarea name="message" rows="15" cols="50"></textarea><br><br>
					<td>&nbsp;</td>
					<td><input name="save" type="submit" value="SAVE">
					  <input name="cencel" type="submit" value="Cancel">
					
				  </tr>

				  <tr>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
				  </tr>

                </form>
            </form>
        </div>
    </div>
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
<?php
#$_SESSION["username"] = "";
require_once('db_connection.php');
if(isset($_POST['save']))
{
	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];
	
	$sql = mysqli_query($con, "INSERT INTO feedback (null, name, email,message) VALUES ('$name', '$email', '$message')");
		if($sql){
	?>
		<script>alert('successfully registered ');</script>
	<?php
	}
	else {
	?>
		<script>alert('error while registering you...');</script>
	<?php
	}
	
}
?>






