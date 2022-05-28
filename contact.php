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

<?php
// Initialize the session
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<?php include 'header.php'?>
		<!-- Hero-area -->
		<div class="hero-area section">

			<!-- Backgound Image -->
			<div class="bg-image bg-parallax overlay" style="background-image:url(./img/bgc2.jpg); " ></div>
			<!-- /Backgound Image -->

			<div class="container">
				<div class="row" >
					<div class="col-md-10 col-md-offset-1 text-center">
						<ul class="hero-area-tree">
							<li><a href="main.html">HOME</a></li>
							<li>CONTACT</li>
						</ul>
						<h1 class="white-text">GET IN TOUCH!</h1>

					</div>
				</div>
			</div>

		</div>
		<!-- /Hero-area -->

		<!-- Contact -->
		<div id="contact" class="section">

			<!-- container -->
			<div class="container">

				<!-- row -->
				<div class="row">

					<!-- contact form -->
					<div class="col-md-6">
						<div class="contact-form">
							<h4>SEND US A MESSAGE</h4>
							<form>
								<input class="input" type="text" name="name" placeholder="Name">
								<input class="input" type="email" name="email" placeholder="Email">
								<input class="input" type="text" name="subject" placeholder="Subject">
								<textarea class="input" name="message" placeholder="Enter your Message"></textarea>
								<button class="main-button icon-button">SUBMIT</button>
							</form>
						</div>
					</div>
					<!-- /contact form -->

					<!-- contact information -->
					<div class="col-md-5 col-md-offset-1">
						<h4>CONTACT US</h4>
						<ul class="contact-details">
							<li><i class="fa fa-envelope"></i>CareerMatch@gmail.com</li>
							<li><i class="fa fa-phone"></i>123-456-789-10</li>
							<li><i class="fa fa-map-marker"></i>Delhi, India</li>
						</ul>
					</div>
					<!-- contact information -->

				</div>
				<!-- /row -->

			</div>
			<!-- /container -->

		</div>
		<!-- /Contact -->

		
		<!-- Footer -->
		<footer id="footer" class="section">

			<!-- container -->
			<div class="container">

				<!-- row -->
				<div class="row">

					<!-- footer logo -->
					<div class="col-md-6">
						<div class="footer-logo">
							<a class="logo" style="font-size: 30px;" href="main.html">CareerMatch</a>
						</div>
					</div>
					<!-- footer logo -->


				</div>
				<!-- /row -->

				<!-- row -->
				<div id="bottom-footer" class="row">

					<!-- social -->
					<div class="col-md-4 col-md-push-8">
						
					</div>
					<!-- /social -->

					<!-- copyright -->
					<div class="col-md-8 col-md-pull-4">
						<div class="footer-copyright">
							<span>&copy; Copyright 2022. All Rights Reserved. </span>
						</div>
					</div>
					<!-- /copyright -->

				</div>
				<!-- row -->

			</div>
			<!-- /container -->

		</footer>
		<!-- /Footer -->
		
		<!-- preloader -->
		<div id='preloader'><div class='preloader'></div></div>
		<!-- /preloader -->


		<!-- jQuery Plugins -->
		<script type="text/javascript" src="js/jquery.min.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
		<script type="text/javascript" src="js/main.js"></script>
	
	</body>
</html>