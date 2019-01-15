<?php

session_start();
//connectivity
require('config.php');

if($_SESSION['user']=="")
{
	header('location:index.php');
}

?>

<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>Admin Profile</title>
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
				<div class="header-btns">
					<a href="profile.php" class="session" >Welcome <?php echo $_SESSION['user']; ?></a></li>
                    <a href="index.html" class="site-btn sb-c3">Logout</a>
				</div>
			</div>
		</div>
	</header>
    <!-- Header section end -->
    
    <section class="profile-body">
		<div class='row' >
			<div class="body-btns">
				<a href="studentDB.php" class="site-btn sb-c4">Students</a>
				<a href="employeeDB.php" class="site-btn sb-c4">Employees</a>
				<a href="hostelDB.php" class="site-btn sb-c4">Hostels</a>
			</div>
		</div>
		<div class='row' >
			<div class="body-btns">
				<a href="prefernce.php" class="site-btn sb-c4">Preference</a>
				<a href="messages.php" class="site-btn sb-c4">Messages</a>
			</div>
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
