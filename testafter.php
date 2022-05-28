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
							<li><a href="main.php">HOME</a></li>
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
        <br><br><br><br><br><br><br>
        <b><h1>The top job profiles that matched your skills are: </h1><br><br></b>
        <div class="graph-cont">
        <h1>You can be a great: </h1>
        <div class="bar bar1" ><a href="http://localhost/crs/blog.php" style="text-decoration: none;"><font color="white" value = "{{job[0]}}"></a></font></div><br>
            
                
                
            
                <div class="bar bar2"><a href="http://localhost/crs/blog.php" style="text-decoration: none;"><font color="white" value = "{{jobs_dict[value]}}"></a></font></div><br>
        
            
            
            
                
                
                            <!--<div class="bar bar2"><a href="#" style="text-decoration: none;"><font color="white">{{job_dict[value]|e}}</a></font></div><br> --> 
                            
        
                <!--	<div class="bar bar2"><a href="#" style="text-decoration: none;"><font color="white">{{job_dict[value]}}</a></font></div><br>  
                
                -->

            
            
            <i><h2><p><a href="http://localhost/crs/blog.php">To know more about these job profiles CLICK HERE!</a></p></h2></i>
            
            
            
            
            
            
            
            
            
        <!--<div class="bar bar2"><a href="#" style="text-decoration: none;"><font color="white">{{ job1 }}</a></font></div><br>
        <div class="bar bar3" ><a href="#" style="text-decoration: none;"><font color="white">{{ job2 }}</a></font></div><br>
        <div class="bar bar4"><a href="#" style="text-decoration: none;"><font color="white">{{ job3 }}</a></font></div><br>-->
            
        </div>
        <br><br><br><br><br><br><br>
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
        