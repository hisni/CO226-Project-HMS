<?php
    //connect the database
    require('config.php');

    if ( isset($_POST['Register']) ){

        $fName = $_POST['fName'];
        $lName = $_POST['lName'];
        $sex = $_POST['sex'];
        $dob = strtotime($_POST["dob"]);
        $dob = date('Y-m-d H:i:s', $dob); 
        $homeAdd = $_POST['homeAdd'];
        $contactNo = $_POST['contactNo'];
        $mail = $_POST['mail'];
        $faculty = $_POST['faculty'];
        $regNo = $_POST['regNo'];
        $enrolData = strtotime($_POST["enrolDate"]);
        $enrolData = date('Y-m-d H:i:s', $enrolData); 
            
        $query = "INSERT INTO students VALUES ( '$regNo', '$fName', '$lName', '$sex', '$dob', '$homeAdd', '$contactNo',  '$mail', '$faculty', '$enrolData', NULL, NULL, NULL )";
        mysqli_query($con,$query);
        echo '<script>alert("Details Saved!")</script>';
        echo "<script>document.location='hostelApp.php'</script>";
    }
?>


<!DOCTYPE html>
<html>
<head>
	<title> Student Registration Form</title>
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
	<link rel="stylesheet" type="text/css" href="css/studentApp.css">

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

	<div class="formst">
		<form method="post">
			<fieldset>
				<div class="title">
					Personal Details
				</div>
				<br><br><br>
				<detail>First Name : </detail> 
				<br>
				<input type="text" class="text-line" name="fName" >
				<br><br><br><br>
				<detail>Last Name : </detail>
				<br>
				<input type="text" class="text-line" name="lName" >
				<br><br><br><br>
	
				<detail>Sex : </detail>
				<input type="radio" name="sex" value="M"> Male </input>
				<input type="radio" name="sex" value="F"> Female </input>
				<br><br><br><br>
	
				<detail>Date of Birth : </detail>
				<input type="date" class="text-line" name="dob">
				<br><br><br><br>
	
				<detail>Home Address : </detail>
				<br>
				<input type="text" class="text-line" name="homeAdd">
				<br><br><br><br>
	
				<detail>Contact No : </detail>
				<br>
				<input type="text" class="text-line" name="contactNo">
				<br><br><br><br>
	
				<detail>E-mail : </detail>
				<br>
				<input type="text" class="text-line" name="mail">
				<br><br><br><br>
			</fieldset>
	
			<br>
			<br>
			<br>
	
			<fieldset>
				<div class="title">
					University Details
				</div>
				<br><br><br>
	
				<detail>Faculty : </detail>
				<select name="faculty"> 
					<option value="AHS"> AHS </option>
					<option value="Agriculture"> Agriculture </option>
					<option value="Arts"> Arts </option>
					<option value="Dental"> Dental Sciences </option>
					   <option value="Engineering"> Engineering </option>
					   <option value="Management"> Management </option>
					   <option value="Medicine"> Medicine </option>
					<option value="Science"> Science </option>
					   <option value="Vetnery"> Vetnery Sciences </option>
				</select>
				<br><br><br><br>
	
				<detail>Registerd No : </detail>
				<br>
				<input type="text" class="text-line regno" name="regNo" Required/>
				<br><br><br><br>
	
				<detail>Enrolled date : </detail>
				<input type="date" class="text-line" name="enrolDate">
				<br><br><br><br>
			</fieldset>
			<center>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<input class="site-btn sb-c2 " type="submit" name="Register" value="Register"/> 
			</center>
			<br><br><br><br>
		</form>	
	</div>
	
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