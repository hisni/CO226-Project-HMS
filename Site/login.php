<?php
//connectivity
require('config.php');

if(isset($_POST['create']))
{
    $n = $_POST['Name'];
	$passc = $_POST['PW'];
	$pc = md5($passc);        //encrypt pass
    $em = $_POST['Email'];
    
    $q = "SELECT username FROM admins WHERE username='$n'";
    $cq = mysqli_query($con,$q);
    $ret = mysqli_num_rows($cq);
    if($ret == true)
    {
        echo '<script>alert("Username already exists!")</script>';
	}
    else
    {
        $query = "INSERT INTO admins VALUES ('$n','$pc','$em')";
		mysqli_query($con,$query);
		echo '<script>alert("Details Saved!")</script>';
    }

}


if(isset($_POST['login']))
{
	session_start();
		
	$u = $_POST['User'];
	$pass = $_POST['Pass'];
	$p = md5($pass);
	$_SESSION['user']=$u;
	$_SESSION['pass']=$p;
    //user check
    $q = "SELECT * FROM admins WHERE username='$u' AND password='$p'";
    $cq = mysqli_query($con,$q);
    $ret = mysqli_num_rows($cq);
    if($ret == true)
    {
        echo "<script>document.location='profile.php'</script>";
        //echo "<center><h2 style='color:green'>ACCESS GRANTED</h2></center>";
    }
    else
    {
		echo '<script>alert("Invalid Username/Password!")</script>';
		
    }
}

?>



<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>Login</title>
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
    <section>
        <div class="login-page">
            <div class="formlg">
                <form class="register-form" method="post">
                    <input type="text" name="Name" placeholder="name"/>
                    <input type="password" name="PW" placeholder="password"/>
					<input type="text" name="Email" placeholder="email address"/>
					<input type="submit" value="Create" name="create"/>
                    <p class="message">Already registered? <a href="#">Sign In</a></p>
                </form>
                <form class="login-form" method="post">
                    <input type="text" name="User" placeholder="username"/>
                    <input type="password" name="Pass" placeholder="password"/>
					<input type="submit" value="Login" name="login"/>
                <p class="message">Not registered? <a href="#">Create an account</a></p>
                </form>
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
