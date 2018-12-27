<!DOCTYPE html>
<html lang="en">
<head>
	<title>Techops | Quiz Buzzer</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">

<style>

body{

}

#footer-design {
	color:white;
	font-size:14px;
    line-height: 1.8em;
    letter-spacing: 2px;
    text-align: center;
    margin-top: 5em;
    background: #0e0e13;
    padding: 10px 0;	
}

</style>
	
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

<header>
	<img src="images/logo.jpeg" alt="Techops" height="100" width="200">
	<input id="admin-login" type="button" value="Admin" onclick="window.location.href='admin-login.php'" />
</header>
		<form id="register-form" name="registration" action="home.php" method="post">

			<label><b>Name</b></label><br>
			<input type="text" name="username" placeholder="Username" required /><br>

			<label><b>College Name</b></label><br>
			<input type="text" name="collegename" placeholder="Your College Name" required /><br>

			<label><b>Mobile</b></label><br>
			<input type="text" name="mobile" placeholder="Mobile" required /><br>

			<label><b>Email</b></label><br>
			<input type="email" name="email" placeholder="Email" required /><br>

			<input id="register" type="button" value="Register" />
		</form>

<footer>
	<p id="footer-design">© 2018 Techops. All Rights Reserved | Design by <a href="http://sjec.edu.in/bca.html" target="_blank">BCA</a></p>
</footer>


</body>
</html>