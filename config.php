<?php
	if(isset($_POST['name'])){
	// Set connection variables	
    $server = "localhost";
    $username = "root";
    $password = "";

	// Create a database connection
    $con = mysqli_connect($server, $username, $password);

	// Check for connection success
    if(!$con)
    {
        die("Connection to the database failed due to " . mysqli_connect_error());
    }
    // echo "Success connecting to the database";

	// Collect post variables
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $sql = "INSERT INTO `CareerMatch`.`Contact` (`Name`, `Email`, `Subject`, `Message`, `Date&Time`) VALUES ('$name', '$email', '$subject', '$message', current_timestamp());";
    // echo $sql;

	// Execute the query
    if($con->query($sql) == true)
    {
       // echo "Successfully inserted";
    }
    else
    {
        echo "ERROR: $sql <br> $con->error";
    }

	// Close the database connection
    $con->close();
	}	
?>