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
							<li>CAREER RECOMMENDATION</li>
						</ul>
					</div>
				</div>
				
			</div>

		</div>
		<!-- /Hero-area -->

<body>
	<style>
		body{
			background-color: rgb(207, 159, 255);
		}
	</style>	
    <div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
        <div class="wrapper wrapper--w790">
            <div class="card card-5">
                <div class="card-heading">
                    <center><h2 class="title">Rate Yourself!</h2></center>
				
                </div>
				
				
                <div class="card-body">
                    
					<form  method="POST", action="{{url_for('result')}}">
						
						<div class="form-group row">
							<label  class="col-sm-3  col-form-label">Database Fundamentals</label>
							<div class="col-sm-9">
							<select class="form-select form-control" required aria-label="select example" name="rate_Database Fundamentals">
								    <option value="">Choose Option</option>
								    <option value="1">Not Interested</option>
									<option value="2">Poor</option>
									<option value="3">Beginner</option>
									<option value="5">Average</option>
									<option value="6">Intermediate</option>
									<option value="7">Excellent</option>
									<option value="9">Professional</option>
								</select>
							
						    </div>
				</div>
				<div class="form-group row">
							<label  class="col-sm-3  col-form-label">Computer Architecture</label>
							<div class="col-sm-9">
							 <select class="form-select form-control" required aria-label="select example" name="rate_Computer Architecture" >
							        <option value="">Choose Option</option>
									<option value="1">Not Interested</option>
									<option value="2">Poor</option>
									<option value="3">Beginner</option>
									<option value="5">Average</option>
									<option value="6">Intermediate</option>
									<option value="7">Excellent</option>
									<option value="9">Professional</option>
							 </select>
						    </div>
				</div>
				<div class="form-group row">
							<label  class="col-sm-3  col-form-label">Distributed Computing Systems</label>
							<div class="col-sm-9">
							 <select class="form-select form-control" required aria-label="select example" name="rate_Distributed Computing Systems" >
							        <option value="">Choose Option</option>
									<option value="1">Not Interested</option>
									<option value="2">Poor</option>
									<option value="3">Beginner</option>
									<option value="5">Average</option>
									<option value="6">Intermediate</option>
									<option value="7">Excellent</option>
									<option value="9">Professional</option>
							 </select>
						    </div>
				</div>
				<div class="form-group row">
							<label  class="col-sm-3  col-form-label">Cyber Security</label>
							<div class="col-sm-9">
							 <select class="form-select form-control" required aria-label="select example" name="rate_Cyber Security" >
							        <option value="" >Choose Option</option>
									<option value="1">Not Interested</option>
									<option value="2">Poor</option>
									<option value="3">Beginner</option>
									<option value="5">Average</option>
									<option value="6">Intermediate</option>
									<option value="7">Excellent</option>
									<option value="9">Professional</option>
							 </select>
						    </div>
				</div>
				<div class="form-group row">
							<label  class="col-sm-3  col-form-label">Computer Networking</label>
							<div class="col-sm-9">
							 <select class="form-select form-control" required aria-label="select example" name="rate_Networking" >
							        <option value="">Choose Option</option>
									<option value="1">Not Interested</option>
									<option value="2">Poor</option>
									<option value="3">Beginner</option>
									<option value="5">Average</option>
									<option value="6">Intermediate</option>
									<option value="7">Excellent</option>
									<option value="9">Professional</option>
							 </select>
						    </div>
				</div>
				<div class="form-group row">
							<label  class="col-sm-3  col-form-label">Software Development</label>
							<div class="col-sm-9">
							 <select class="form-select form-control" required aria-label="select example" name="rate_Development" >
							        <option value="">Choose Option</option>
									<option value="1">Not Interested</option>
									<option value="2">Poor</option>
									<option value="3">Beginner</option>
									<option value="5">Average</option>
									<option value="6">Intermediate</option>
									<option value="7">Excellent</option>
									<option value="9">Professional</option>
							 </select>
						    </div>
				</div>
				<div class="form-group row">
							<label  class="col-sm-3  col-form-label">Programming Skills</label>
							<div class="col-sm-9">
							 <select class="form-select form-control" required aria-label="select example" name="rate_Programming Skills" >
							        <option value="">Choose Option</option>
									<option value="1">Not Interested</option>
									<option value="2">Poor</option>
									<option value="3">Beginner</option>
									<option value="5">Average</option>
									<option value="6">Intermediate</option>
									<option value="7">Excellent</option>
									<option value="9">Professional</option>
							 </select>
						    </div>
				</div>
				<div class="form-group row">
							<label  class="col-sm-3  col-form-label">Project Management</label>
							<div class="col-sm-9">
							 <select class="form-select form-control" required aria-label="select example" name="rate_Project Management" >
							        <option value="">Choose Option</option>
									<option value="1">Not Interested</option>
									<option value="2">Poor</option>
									<option value="3">Beginner</option>
									<option value="5">Average</option>
									<option value="6">Intermediate</option>
									<option value="7">Excellent</option>
									<option value="9">Professional</option>
							 </select>
						    </div>
				</div>
				<div class="form-group row">
							<label  class="col-sm-3  col-form-label">Computer Forensics Fundamentals</label>
							<div class="col-sm-9">
							 <select class="form-select form-control" required aria-label="select example" name="rate_Computer Forensics Fundamentals" >
							        <option value="">Choose Option</option>
									<option value="1">Not Interested</option>
									<option value="2">Poor</option>
									<option value="3">Beginner</option>
									<option value="5">Average</option>
									<option value="6">Intermediate</option>
									<option value="7">Excellent</option>
									<option value="9">Professional</option>
							 </select>
						    </div>
				</div>
				<div class="form-group row">
							<label  class="col-sm-3  col-form-label">Technical Communication Skills</label>
							<div class="col-sm-9">
							 <select class="form-select form-control" required aria-label="select example" name="rate_Technical Communication" >
							        <option value="">Choose Option</option>
									<option value="1">Not Interested</option>
									<option value="2">Poor</option>
									<option value="3">Beginner</option>
									<option value="5">Average</option>
									<option value="6">Intermediate</option>
									<option value="7">Excellent</option>
									<option value="9">Professional</option>
							 </select>
						    </div>
				</div>
				<div class="form-group row">
							<label  class="col-sm-3  col-form-label">AI/ML</label>
							<div class="col-sm-9">
							 <select class="form-select form-control" required aria-label="select example" name="rate_AI ML" >
							        <option value="">Choose Option</option>
									<option value="1">Not Interested</option>
									<option value="2">Poor</option>
									<option value="3">Beginner</option>
									<option value="5">Average</option>
									<option value="6">Intermediate</option>
									<option value="7">Excellent</option>
									<option value="9">Professional</option>
							 </select>
						    </div>
				</div>
				<div class="form-group row">
							<label  class="col-sm-3  col-form-label">Software Engineering</label>
							<div class="col-sm-9">
							 <select class="form-select form-control" required aria-label="select example" name="rate_se" >
							        <option value="">Choose Option</option>
									<option value="1">Not Interested</option>
									<option value="2">Poor</option>
									<option value="3">Beginner</option>
									<option value="5">Average</option>
									<option value="6">Intermediate</option>
									<option value="7">Excellent</option>
									<option value="9">Professional</option>
							 </select>
						    </div>
				</div>
				<div class="form-group row">
							<label  class="col-sm-3  col-form-label">Business Analysis</label>
							<div class="col-sm-9">
							 <select class="form-select form-control" required aria-label="select example" name="rate_Business Analysis" >
							        <option value="">Choose Option</option>
									<option value="1">Not Interested</option>
									<option value="2">Poor</option>
									<option value="3">Beginner</option>
									<option value="5">Average</option>
									<option value="6">Intermediate</option>
									<option value="7">Excellent</option>
									<option value="9">Professional</option>
							 </select>
						    </div>
				</div>
				<div class="form-group row">
							<label  class="col-sm-3  col-form-label">Communication Skills</label>
							<div class="col-sm-9">
							 <select class="form-select form-control" required aria-label="select example" name="rate_Communication skills" >
							        <option value="">Choose Option</option>
									<option value="1">Not Interested</option>
									<option value="2">Poor</option>
									<option value="3">Beginner</option>
									<option value="5">Average</option>
									<option value="6">Intermediate</option>
									<option value="7">Excellent</option>
									<option value="9">Professional</option>
							 </select>
						    </div>
				</div>
				<div class="form-group row">
							<label  class="col-sm-3 col-form-label">Data Science</label>
							<div class="col-sm-9">
							 <select class="form-select form-control" required aria-label="select example" name="rate_Data Science" >
							        <option value="">Choose Option</option>
									<option value="1">Not Interested</option>
									<option value="2">Poor</option>
									<option value="3">Beginner</option>
									<option value="5">Average</option>
									<option value="6">Intermediate</option>
									<option value="7">Excellent</option>
									<option value="9">Professional</option>
							 </select>
						    </div>
				</div>
				<div class="form-group row">
							<label  class="col-sm-3  col-form-label">Troubleshooting skills</label>
							<div class="col-sm-9">
							 <select  class="form-control" name="rate_Troubleshooting skills" >
							        <option value="">Choose Option</option>
									<option value="1">Not Interested</option>
									<option value="2">Poor</option>
									<option value="3">Beginner</option>
									<option value="5">Average</option>
									<option value="6">Intermediate</option>
									<option value="7">Excellent</option>
									<option value="9">Professional</option>
							 </select>
						    </div>
							
                </div>
				<div class="form-group row">
							<label  class="col-sm-3  col-form-label">Graphics Designing</label>
							<div class="col-sm-9">
							 <select  class="form-control" name="rate" >
							        <option value="">Choose Option</option>
									<option value="1">Not Interested</option>
									<option value="2">Poor</option>
									<option value="3">Beginner</option>
									<option value="5">Average</option>
									<option value="6">Intermediate</option>
									<option value="7">Excellent</option>
									<option value="9">Professional</option>
							 </select>
						    </div>
							
                </div>
                <center><button class="btn btn--radius-2 btn--red" type="submit" href = "testafter.php">Discover Yourself!</button></center>
                </div>						
				</div>
</div>		

</form>		
			
    <!-- Footer -->
		<footer id="footer" class="section">

			<!-- container -->
			<div class="container">

				<!-- row -->
				<div class="row">

					<!-- footer logo -->
					<div class="col-md-6">
						<div class="footer-logo">
							<a class="logo" style="font-size: 30px;" href="main.php">CareerMatch</a>
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
		

</body>

</html>