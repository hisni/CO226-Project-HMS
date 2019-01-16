<?php

session_start();
//connectivity
require('config.php');

	if($_SESSION['user']==""){
		header('location:index.html');
	}

    $name = $_SESSION['user'];
    $q = "SELECT RegNum FROM studentprofiles WHERE username='$name'";
    $cq = mysqli_query($con,$q);
    $row = mysqli_fetch_assoc($cq);
    
    $reg = $row["RegNum"];
    $q = "SELECT regNum,hostelName,roomNum FROM students WHERE regNum='$reg' ";
	$cq = mysqli_query($con,$q);
	$ret = mysqli_num_rows($cq);
		
?>

<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>Hostel Details</title>
	<meta charset="UTF-8">
	<meta name="description" content="UOP-HMS">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->
	<link href="img/uop.png" rel="shortcut icon"/>

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/magnific-popup.css"/>
	<link rel="stylesheet" href="css/owl.carousel.min.css"/>
	<link rel="stylesheet" href="css/style.css"/>
	<link rel="stylesheet" href="css/animate.css"/>
	<link rel="stylesheet" href="css/w3.css">

	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>

<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- Header section -->
	<header class="header-section">
		<div class="container">
			<a href="index.html" class="site-logo">
				<img src="img/logo.png" alt="logo">
			</a>
			<!-- Switch button -->
			<div class="nav-switch">
				<div class="ns-bar"></div>
			</div>
			<div class="header-right">
				</ul>
				<div class="header-btns">
					<a href="stprofile.php" class="site-btn sb-c3"><?php echo $_SESSION['user']; ?></a>
                    <a href="index.html" class="site-btn sb-c3">Logout</a>
				</div>
			</div>
		</div>
	</header>
	<!-- Header section end -->
    
    
	<section class="DBbody" >
        <h3 align="center">Hostel Details</h3>
        <div class="stdetails">
            <?php
                if (mysqli_num_rows($cq) > 0) {
                while( $row = mysqli_fetch_assoc($cq) ) {

                    $regNum = $row["regNum"];
                    $hostel = $row["hostelName"];
                    $room = $row["roomNum"];

                    print "<div>
                            <p>Register No: $regNum</p>
                            <p>Hostel : $hostel</p>
                            <p>Room No : $room</p>
                    </div>";
                    
                    }
                }
            ?>
        </div>
	</section>

	<!-- Footer section -->
	<footer class="footer-section">
		<div class="container">
			<div class="footer-img">
					<img src="img/logo.png" alt="">
			</div>
			<div class="footer-nav">
				<ul>
					<li><a href="index.html">Home</a></li>
					<li><a href="about.html">About us</a></li>
					<li><a href="contact.php">Contact</a></li>
				</ul>
			</div>
			<div class="footer-copy">
				<p> &copy; 2019 - University of Peradeniya - Accommodation Division | All rights reserved.  </p>
			</div>
		</div>
	</footer>
	<!-- Footer section end -->

	<!--====== Javascripts & Jquery ======-->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/main.js"></script>

</body>
</html>
