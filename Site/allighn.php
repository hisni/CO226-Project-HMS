<?php
    //connect the database
    require('config.php');

    if ( isset($_POST['allocate']) ){
        $rmNo = $_POST['rmNo'];

        //update the database
        $query = "UPDATE students SET roomNum=22 where roomNum=$owner";
        
        mysqli_query($con,$query);
        echo "<script>document.location='allighn.php'</script>";
    }
?>



<!DOCTYPE <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>alligh</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <section class="DBbody">
		
        <form method="POST">
            <select name="owner">
                <?php
                    require('config.php');

                    $sql = mysqli_query($con, "SELECT regNum FROM students WHERE roomNum IS NULL");
                    while ($row = $sql->fetch_assoc()){
                        echo "<option value=". $row['regNum'] .
                        ">" . $row['regNum'] . "</option>";

                        <select name="ownerr">
                            $sqll = mysqli_query($con, "SELECT regNum FROM students WHERE roomNum IS NULL");
                            while ($row = $sqll->fetch_assoc()){
                                echo "<option value=". $row['regNum'] .
                                ">" . $row['regNum'] . "</option>";
                            }
                        </select>
                    }
                ?>
            </select>
            Assign Room No: 
            <input type="text" class="text-line" name="rmNo" >
            <input  class="site-btn1" type="submit" name="allocate" value="allocate">
        </form>
        
    </section>
</body>
</html>