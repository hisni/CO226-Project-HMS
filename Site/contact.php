<?php

//connectivity
require('config.php');

if(isset($_POST['submit']))
{
    $name = $_POST['Name'];
    $email = $_POST['Email'];
    $subject = $_POST['Subject'];
    $message = $_POST['message'];

    $query = "INSERT INTO messages VALUES ('NULL','$name','$email','$subject','$message')";
    mysqli_query($con,$query);
    echo '<script>alert("Message")</script>';
}

?>

<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>Contact Us</title>
	<meta charset="UTF-8">
	<meta name="description" content="UOP-HMS">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
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
				<ul class="main-menu">
					<li><a href="index.html">Home</a></li>
					<li><a href="about.html">About us</a></li>
					<li class="active"><a href="contact.php">Contact</a></li>
					
				</ul>
				<div class="header-btns">
					<a href="login.php" class="site-btn sb-c1">Login</a>
					<div class="dropdown">
						<a href="#" class="site-btn sb-c2">Register</a>
							<div class="dropdown-content">
								<a href="studentApp.php">Student</a>
								<a href="employeeApp.php">Employee</a>
								<a href="hostelApp.php">Hostel</a>
							</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	<!-- Header section end -->



	<!-- Page Top section -->
	<section class="page-top-section set-bg" data-setbg="img/page-top-bg/2.jpg">
		<div class="container">
			<h2>Contact</h2>
		</div>
	</section>
	<!-- Page Top section end -->


	<!-- Services section -->
	<section class="contact-section spad">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 contact-text">
					<h4 class="contact-title">Contact us</h4>
					<p>Send us your Problem</p>
					<div class="contact-info">
						<div class="ci-icon">
							<img src="img/contact-icons/1.png" alt="">
						</div>
						<h6>Accomadation Division, University of Peradeniya.</h6>
					</div>
					<div class="contact-info">
						<div class="ci-icon">
							<img src="img/contact-icons/2.png" alt="">
						</div>
						<h6>203-808-8613</h6>
					</div>
					<div class="contact-info">
						<div class="ci-icon">
							<img src="img/contact-icons/3.png" alt="">
						</div>
						<h6>admin@eng.pdn.ac.lk</h6>
					</div>
				</div>
				<div class="col-lg-6">
                    <h4 class="contact-title">Get in touch</h4>
                    <div class="formct">
                        <form class="contact-form" method="post">
                            <input type="text" name="Name" placeholder="Name">
                            <input type="email" name="Email" placeholder="E-mail">
                            <input type="text" name="Subject" placeholder="Subject">
                            <textarea name="message" placeholder="Message"></textarea>
                            <input type="submit" value="Submit" name="submit"/>
                        </form>
                    </div>
				</div>
			</div>
			<div class="map">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d989.4691134598727!2d80.59573672915586!3d7.254899199672705!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae368d323ff677f%3A0xc116d0dd96eadf43!2sAccommodation+Unit!5e0!3m2!1sen!2slk!4v1547296304009" width="800" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>
		</div>
	</section>
	<!-- Services section end -->


	
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
