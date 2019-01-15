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
        $jobType = $_POST['jobType'];
        $workPlace=$_POST['workPlace'];

        //update the database
        $query = "INSERT INTO employee VALUES ( NULL, '$fName', '$lName', '$sex', '$dob', '$homeAdd', '$contactNo',  '$mail', '$jobType', '$workPlace')";
        
        mysqli_query($con,$query);
        echo '<script>alert("Details Saved!")</script>';
        echo "<script>document.location='employeeApp.php'</script>";
    }
?>


<!DOCTYPE html>
<html>
<head>
	<title> Employee Registration Form</title>
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
	<link rel="stylesheet" type="text/css" href="css/employeeApp.css">

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
	
	<div class="emp">
		<form class="formemp" method="POST">
			<fieldset class="pDetail">

				<br><br><br><br>
				First Name :
				<input type="text" class="text-line" name="fName" >
				<br><br><br>	
						
				Last Name : 
				<input type="text" class="text-line" name="lName">
				<br><br><br>

				Sex : 
				<input type="radio" name="sex" value="M"> Male 
				<input type="radio" name="sex" value="F"> Female 
				<br><br><br>

				Date of Birth : 
				<input type="date" class="text-line" name="dob" size="20">
				<br><br><br>

				Home Address : 
				<input type="text" class="text-line" name="homeAdd" >
				<br><br><br>

				Contact No : 
				<input type="text" class="text-line" name="contactNo"  >
				<br><br><br>

				E-mail : 
				<input type="text" class="text-line" name="mail" >
				<br><br><br>

				Job type : 
				<input type="text" class="text-line" name="jobType" >
				<br><br><br>

				Working place : 
				<input type="text" class="text-line" name="workPlace" >
				<br><br><br>

                <input  class="site-btn1" type="submit" name="Register" value="Register">
            </fieldset>   
		</form>
	</div>


	<!--div class="right">
		<center>
			<p> Vacancies </p>
			<fieldset class="vacant">
			<table>
				<tr class="heading">
					<th>
						Post
					</th>
					<th>
						No of vacant
					</th>
				</tr>

				<tr>
					<th class="vacantData">
						Post1
					</th>
					<th class="vacantData">
					
					</th>
				</tr>

				<tr>
					<th class="vacantData">
						Post2
					</th>
					<th class="vacantData">
						
					</th class="vacantData">
				</tr>

				<tr>
					<th class="vacantData">
						Post3
					</th>
					<th class="vacantData">

					</th>
				</tr>

				<tr>
					<th class="vacantData">
						Post4
					</th>
					<th class="vacantData">
	
					</th>
				</tr>
			</table>
			</fieldset>
		</center>
	</div--!>

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