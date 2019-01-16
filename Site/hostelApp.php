<?php 

//connectivity
require('config.php');

if(isset($_POST['applyNow'])){
	$rn = $_POST['regNo'];
	$yr = $_POST['year'];
	$h1 = $_POST['hostel1'];
	$h2 = $_POST['hostel2'];
	$h3 = $_POST['hostel3'];
	$im = $_POST['image'];
	
    $query = "INSERT INTO hostelreg VALUES('$rn','$yr','$h1','$h2','$h3','$im')";
    mysqli_query($con,$query);
    echo '<script>alert("Details Saved!")</script>';
    echo "<script>document.location='hostelApp.php'</script>";
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Hostel Registration Form</title>
	<link href="img/uop.png" rel="shortcut icon"/>
	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/magnific-popup.css"/>
	<link rel="stylesheet" href="css/owl.carousel.min.css"/>
	<link rel="stylesheet" href="css/style.css"/>
	<link rel="stylesheet" href="css/animate.css"/>
	<link rel="stylesheet" type="text/css" href="css/hostelApp.css">

</head>
<body>

	<!-- Page Preloder -->
	<div id="preloder">
			<div class="loader"></div>
	</div>

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
					<li><a href="contact.php">Contact</a></li>
					
				</ul>
				<div class="header-btns">
				<div class="dropdown">
					<a href="#" class="site-btn sb-c1">Login</a>
						<div class="dropdown-content">
							<a href="stlogin.php">Student</a>
							<a href="login.php">Admin</a>
						</div>
					</div>
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

	<section class="tableform">
		<fieldset>
		<div class="bottom">
            <center>
                <form method ="post">
                    <table>
                        <tr>
                            <th>
                                <detail>
                                    Registration No : 
                                </detail>
                            </th>
                            <th>
                                <input type="text" class="text-line" name="regNo" required>
                            </th>
                        </tr>
                        <tr>
                            <th>
                                <detail>
                                    Year : 
                                </detail>
                            </th>
                            <th>
                                <select name="year" required>
                                    <option value="first"> 1st </option>
                                    <option value="second"> 2nd </option>
                                    <option value="third"> 3rd </option>
                                    <option value="fourth"> 4th </option>
                                    <option value="fifth"> 5th </option>
                                </select>
                            </th>
                        </tr>
                        <tr>
                            <th>
                                <detail>
                                    Hostel preferences : 
                                </detail>
                            </th>
                            <th>
                                <b>1. </b> <input type="text" class="text-line" name="hostel1" required> <br>
                                <b>2. </b><input type="text" class="text-line" name="hostel2"> <br>
                                <b>3. </b><input type="text" class="text-line" name="hostel3"> <br>
                            </th>
                        </tr>
                        <tr>
                            <th>
                                <detail>
                                    Attach your payment proof here: 
                                </detail>
                            </th>
                            <th>
                                <input type="file" id="image " name="image" required="1">
                            </th>
                        </tr>
                    </table>
                    <input type="submit" class="site-btn1" value="Apply Now" name="applyNow"> </input>
                </form>
                <h1> If you have not registered yet to the accomadation devision, please click <a href="studentApp.html"> <i> here </i></a> to register </h1>
            </center>
        </div>
		</fieldset>
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