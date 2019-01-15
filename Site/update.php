<?php
    require('config.php');

    session_start();
    if( isset($_POST['allocate']) ){
		$hostel = $_POST['hostel'];
		$room = $_POST['rmNo'];
		$reg = $_SESSION['reg'];
        
        $query = "UPDATE students SET roomNum='$room' where regNum='$reg'";
        mysqli_query($con,$query);
        $query = "UPDATE students SET hostelName='$hostel' where regNum='$reg'";
        mysqli_query($con,$query);
        echo '<script>alert("Success!")</script>';
        echo "<script>document.location='assignRoom.php'</script>";

	}
