<?php
	require 'store.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<title>Techops | Quiz Buzzer</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">

	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<!-- css -->
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<!--<link href="css/jQuery.lightninBox.css" rel="stylesheet" type="text/css" media="all" />-->
	<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" property="" />
	<!-- animation -->
	<link href="css/aos.css" rel="stylesheet" type="text/css" media="all" /><!-- //animation effects-css-->
	<!-- //animation -->
	<!--// css -->
	<!-- font-awesome icons -->
	<link href="css/font-awesome.css" rel="stylesheet"> 
	<!-- //font-awesome icons -->
	<script src="js/jquery-2.2.3.min.js"></script>
	<script src="js/bootstrap.js"></script>
</head>
<body>
	<!-- w3-banner -->
	<div class="w3-banner jarallax">
		<div class="wthree-different-dot">
			<div class="head">
				<div class="container">
					<div class="navbar-top">
							<!-- Brand and toggle get grouped for better mobile display -->
							<div class="navbar-header">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							  </button>
								 <div class="navbar-brand logo ">
									<h1><a href="index.html">Techops</a></h1>
								</div>

							</div>
						</div>
				</div>
			</div>
			<!-- banner -->
			<div class="banner">
				<div class="container">
					<div class="slider">
						
						<div  id="top" class="callbacks_container-wrap">
							<ul class="rslides" id="slider3">
								<li>
									<div class="slider-info" data-aos="fade-left">
										<h3> Welcome to the Quiz Buzzer</h3>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<!-- //banner -->
		</div>
	</div>
	<!-- //w3-banner -->
	<!-- //modal -->
	<div class="banner-bottom" id="about">
		<div class="container">
			<h3 class="heading-agileinfo" data-aos="zoom-in">Terms & Conditions<span>Read the instructions carefully..before you proceed.</span></h3>
			<div class="w3ls_banner_bottom_grids">
				<div class="col-md-4 agileits_services_grid" data-aos="fade-up">
					<p>Maximum participants can be 2</p>
					<p>Change your "device name as instructed" by the co-ordinator</p>
					<p>You should answer 30 questions within 15 minutes</p>
					<p>Each question is given 3 secs to answer</p>
					<p>Once the time reaches to 30 secs, you will be taken to the next question </p>
					<p>Skipped questions will not be displayed again for you</p>
					
					<form action="" method="post" name="login">
						<input name="submit" type="submit" formaction="quiz.php" value="I am ready" />
					</form>  
					
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //scrolling script -->
<!-- animation effects-js files-->
	<script src="js/aos.js"></script><!-- //animation effects-js-->
	<script src="js/aos1.js"></script><!-- //animation effects-js-->
<!-- animation effects-js files-->

</body>	
</html>