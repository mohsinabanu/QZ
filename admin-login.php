<!DOCTYPE html>
<html lang="en">
<head>
	<title>Techops | Quiz Buzzer</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">

<style>

header {
		text-align:left;
		background-color:black;
		padding:30px;
		color:white;
	
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
	

input[type=text],input[type=password],input[type=email]{

	width: 100%;
	padding: 10px 20px;
	margin: 8px 0;
	border: 1px solid #ccc;
	
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
	</header>

 <?php
	$uname = $password='';

	if ($_SERVER["REQUEST_METHOD"] == "POST")
	{
		$uname= validate($_POST['username']);
		$password=validate($_POST['password']);
		echo "user name is : ".$uname;
	}

	function validate($data)
	{
		$data = trim($data);
  		$data = stripslashes($data);
  		$data = htmlspecialchars($data);
  		return $data;
	}

	if(($uname=='admin')&& ($password=='admin'))
	{
		echo " Login successful";
	}
?>

		<form id="admin-login-form" name="registration" action="validate-admin.php" method="post">

			<label><b>Username</b></label><br>
			<input type="text" name="username" placeholder="Username" required /><br>

			<label><b>Password</b></label><br>
			<input type="password" name="password" placeholder="Password" required /><br>

			<input id="register" type="submit" value="Login" />
		</form>

<footer>
	<p id="footer-design">© 2018 Techops. All Rights Reserved | Design by <a href="http://sjec.edu.in/bca.html" target="_blank">BCA</a></p>
</footer>

</body>
</html>