<?php

session_start();
//connectivity
require('config.php');

	if($_SESSION['user']=="")
	{
		header('location:index.html');
	}

?>


<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>Employee Details</title>
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
				<div class="header-btns">
					<a href="profile.php" class="site-btn sb-c3"><?php echo $_SESSION['user']; ?></a>
                    <a href="index.html" class="site-btn sb-c3">Logout</a>
				</div>
			</div>
		</div>
	</header>
    <!-- Header section end -->
	
	
	<section class="sectionDB" >
		<h3 align="center" >Assign Hostel Rooms</h3>
		<div class="DBbody room">
			<form method="POST" class="fstform">
				<select name="RegNo">
					<?php
						
						$sql = mysqli_query($con, "SELECT regNum FROM students WHERE roomNum IS NULL");
						while ($row = $sql->fetch_assoc()){
							echo "<option value=". $row['regNum'] .">" . $row['regNum'] . "</option>";
						}
					?>
				</select>
					<input  class="site-btn1" type="submit" name="sel" value="select">
			</form>
			
			<?php
				echo "<form action=\"update.php\" method=".'POST'.">";

				if ( isset($_POST['sel']) ){
					$reg = $_POST['RegNo'];
					$_SESSION['reg'] = $reg;
					$sql = mysqli_query($con, "SELECT * FROM hostelreg WHERE RegNum = 'E/17/100'");
					echo "<br><br>";
					
					echo "<select name=".'hostel'.">";
					while ( $row = $sql->fetch_assoc() ){

						echo "<option value=". $row['hostel1'] .">" . $row['hostel1'] . "</option>";
						echo "<option value=". $row['hostel2'] .">" . $row['hostel2'] . "</option>";
						echo "<option value=". $row['hostel3'] .">" . $row['hostel3'] . "</option>";
					}
					echo "</select>";
					echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
					echo "Assign Room No:";
					echo "<input type=".'text'." class=".'text-line'." name=".'rmNo'." >";
					echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
					echo "<input  class=".'site-btn1'." type=".'submit'." name=".'allocate'." value=".'Confirm'.">";
					echo "</div>";
					
				}  
				echo "</form>";    
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
