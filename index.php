<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
	<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sanad</title>
	<meta name="description" content="">
	<meta name="author" content="">

	<!-- Favicons
	    ================================================== -->
	<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
	<link rel="apple-touch-icon" href="img/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">

	<!-- Bootstrap -->
	<link rel="stylesheet" type="text/css"  href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.css">

	<!-- Stylesheet
	    ================================================== -->
	<link rel="stylesheet" type="text/css"  href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/prettyPhoto.css">
	<link href='http://fonts.googleapis.com/css?family=Lato:400,700,900,300' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800,600,300' rel='stylesheet' type='text/css'>

	<script type="text/javascript" src="js/modernizr.custom.js"></script>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	    <![endif]-->
    </head>
    <body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

        <!-- Header -->
        <header id="header">
          <div class="intro text-center">

            <div class="overlay">
              <div class="container">
                <div class="row">

                  <form id="find_freelancer" action="freelancers.php" class="col-lg-4 col-md-8 form-group">
										<h2>Order a service within minutes .</h2>
										<label>Where are you :</label>
										<input class="form-control" type="text" placeholder="e.g. Mena , Arfa ...etc">
										<label>Service : </label>
										<select class="form-control">
											<option>خدمة 1</option>
											<option>خدمة 2</option>
											<option>خدمة 3</option>
											<option>خدمة 4</option>
											<option>خدمة 5</option>
											<option>خدمة 6</option>
										</select>
										<input type="submit" class="btn btn-danger" value="Search">
									</form>
              </div>
            </div>
          </div>
				</header>
				      <!-- Navigation -->
							<div id="nav">
									<nav class="navbar navbar-custom">
										<div class="container">
											<div class="navbar-header">
												<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse"> <i class="fa fa-bars"></i> </button>
											</div>

											<!-- Collect the nav links, forms, and other content for toggling -->
											<div class="collapse navbar-collapse navbar-main-collapse">
												<ul class="nav navbar-nav">
													<!-- Hidden li included to remove active class from about link when scrolled up past about section -->
													<li class="hidden"> <a href="#page-top"></a> </li>
													<li> <a class="page-scroll" href="#page-top">Home</a> </li>
													<li> <a class="page-scroll" href="#about">About Us</a> </li>
													<li> <a class="page-scroll" href="#contact">Contact Us</a> </li>
													<?php
if(isset($_POST['Login'])){
	$_SESSION['username'] = $_POST['username'];
}

													if(isset($_SESSION['username'])){
?>
<li> <a class="page-scroll"><?php echo "Hello ".$_SESSION['username']; ?></a> </li>
<li> <a class="page-scroll" href="logout.php">Logout</a> </li>
<?php
													}else{
														?>
															  <script type="text/javascript" src="js/jquery.1.11.1.js"></script>
													<li> <a class="page-scroll" data-toggle="modal" data-target="#Login">Login</a> </li>
													<li> <a class="page-scroll" data-toggle="modal" data-target="#Register">Register</a> </li>
													<?php
												}
													 ?>
												</ul>
												<form class="form-inline my-2 my-lg-0">
													<input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
													<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
											</form>
											</div>
										</div>
									</nav>
								</div>
<!-- PopUp Register-->
<div class="modal fade" id="Register" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Login Form</h4>
        </div>
        <div class="modal-body">
					<p>Some text in the modal.</p>
					<form id="RegisterForm" class="form-group">
					<input type="text" name="" placeholder="full name" class="form-control">
					<input type="text" name="" placeholder="mobile phone number" class="form-control">
					<input type="text" name="" placeholder="age ( optional )" class="form-control">
					<input type="submit" value="confirm" class="btn btn-success">
				</form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>

    </div>
  </div>

	<!-- PopUp Login-->
<div class="modal fade" id="Login" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Register Form</h4>
        </div>
        <div class="modal-body">
					<form id="LoginForm" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" class="form-group">
							<input type="text" name="username" placeholder="username or email" class="form-control">
							<input type="password" name="" placeholder="password" class="form-control">
							<input type="submit" name="Login" value="confirm" class="btn btn-success">
						</form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>

    </div>
  </div>

</div>
					<!-- About Section -->
	<div id="about">
			<div class="container">
				<div class="section-title text-center center">
					<h2>About Me</h2>
					<hr>
				</div>
				<div class="row">
					<div class="col-xs-12 col-md-6"> <img src="images/about.png" class="img-responsive2" alt=""> </div>
					<div class="col-xs-12 col-md-6">
						<div class="about-text">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam. Sed commodo nibh ante facilisis bibendum dolor feugiat at. Duis sed dapibus leo nec ornare diam commodo nibh.</p>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam. Sed commodo nibh ante facilisis bibendum dolor feugiat at. Duis sed dapibus leo nec ornare.</p>
							<a href="#portfolio" class="btn btn-primary btn-lg page-scroll">Our Services</a> </div>
					</div>
				</div>
			</div>
		</div>

	    	<!-- Contact Section -->
				<div id="contact" class="text-center">
            <div class="overlay">
              <div class="container">
                <div class="section-title center">
                  <h2>Get In Touch</h2>
                  <hr>
                </div>
                <div class="col-md-8 col-md-offset-2">
                  <form name="sentMessage" id="contactForm" method="post" action="mail/contact_me.php" >
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <input type="text" id="name" class="form-control" placeholder="Name" required="required">
                          <p class="help-block text-danger"></p>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <input type="email" id="email" class="form-control" placeholder="Email" required="required">
                          <p class="help-block text-danger"></p>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <textarea name="message" id="message" class="form-control" rows="4" placeholder="Message" required></textarea>
                      <p class="help-block text-danger"></p>
                    </div>
                    <div id="success"></div>
                    <button type="submit" class="btn btn-default">Send Message</button>
                  </form>
                  <div class="social">
                    <ul>
                      <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                      <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                      <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                      <li><a href="#"><i class="fa fa-github"></i></a></li>
                      <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                      <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>

        <div id="footer">
            <div class="container text-center">
              <div class="fnav">
                <p>Copyright &copy; 2018 The Tichs.</p>
              </div>
            </div>
					</div>


          <script type="text/javascript" src="js/bootstrap.js"></script>
          <script type="text/javascript" src="js/SmoothScroll.js"></script>
          <script type="text/javascript" src="js/easypiechart.js"></script>
          <script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>
          <script type="text/javascript" src="js/jquery.isotope.js"></script>
          <script type="text/javascript" src="js/jquery.counterup.js"></script>
          <script type="text/javascript" src="js/waypoints.js"></script>
          <!-- <script type="text/javascript" src="js/jqBootstrapValidation.js"></script> -->
          <script type="text/javascript" src="js/contact_me.js"></script>
          <script type="text/javascript" src="js/main.js"></script>

<?php

if(isset($_GET['ordered'])){
	?>
	  <script type="text/javascript" src="js/jquery.1.11.1.js"></script>
					<script type="text/javascript">
$(document).ready(function(){

alert("The service has been ordered .\nThe service owner will cotact you soon .");
});

					</script>

					<?php
}
					?>
    </body>
</html>
