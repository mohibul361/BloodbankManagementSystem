<?php
session_start();
?>
<html>
<head>
  <title>Admin Panel</title>
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
		
		<?php    
            if(isset($_SESSION['username'])) {
                  $name = $_SESSION['username'];													
                }
         ?>

           <?php
              if(!isset($_SESSION['username'])) {
			     echo "<span style=float:right;> <a href=/bloodbank/login.php>Login</a></span>";
				 
			 }
			?>
           
			
            <?php
				if(isset($_SESSION['username']))
				{
					echo "<span style=float:right;>Welcome ".$name.",";
					echo "<a href=/bloodbank/logout.php>Logout</a></span>";
				}
            ?>
</div>


<div class="container">

		<!-- Header -->
		<div id="header">
			<img style="height:140px; width:1200px" src="images/bbanner.png" />
		</div>
		<!-- Menu Page -->

		<div style="background-color: #FCFCFC; background-color: #DFDFDF">
            <div class="navbar">
				<?php
					if($_SESSION['role']=='admin')
					{
						echo "<div class=dropdown>";
						echo "<button class=dropbtn>Donor<i class='fa fa-caret-down'></i></button>";
						echo "<div class=dropdown-content>";
						echo "<a href=/bloodbank/donor.php>Create Donor</a>";
						echo "<a href=/bloodbank/donorlist.php>Donor List</a>";
						echo "</div>";
						echo "</div>";
						
						echo "<div class=dropdown>";
						echo "<button class=dropbtn>Member<i class='fa fa-caret-down'></i></button>";
						echo "<div class=dropdown-content>";
						echo "<a href=/bloodbank/sign_up.php>Member Signup</a>";
						echo "<a href=/bloodbank/member_list.php>Member List</a>";
						echo "</div>";
						echo"</div>";
						
						echo "<div class=dropdown>";
						echo "<button class=dropbtn>Blood Management<i class='fa fa-caret-down'></i></button>";                   
						echo "<div class=dropdown-content>";
						echo "<a href=/bloodbank/blood_collect.php>Collect Blood</a>";
                        echo "<a href=/bloodbank/collection_list.php>Collection List</a>";
                        echo "<a href=/bloodbank/blood_delivery.php>Blood Delivery</a>";
                        echo "<a href=/bloodbank/delivery_list.php>Delivery List</a>";
						echo "</div>";
						echo "</div>";
				
						echo "<a href=/bloodbank/requested_list.php>Requisition List</a>";
				
					}
					else
					{
						echo "<a href=/bloodbank/blood_request.php>Blood Requisition</a>";
					}
			    ?>				
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
   


</body>
</html>
<?php

?>






