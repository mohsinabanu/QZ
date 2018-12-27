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
	form {
    border: 3px solid #f1f1f1;
	max-width:100%;
	max-height:100%;
    width: 500px;
    margin: 0 auto;
	margin-left:auto;
	margin-right:auto;
	height:400px;
	padding:80px;
	font-size:15px;
	
	box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);;
	
}


#ques-box{
	max-width: 100%;
	max-height;100%;
	width:600px;
	height:100px;
	padding: 10px 20px;
	margin: 8px 0;
	border: 1px solid #ccc;
}

#option {
	max-width: 100%;
	max-height;100%;
	width:290px;
	height:50px;
	padding: 10px 20px;
	margin: 8px 0;
	border: 1px solid #ccc;
}

#admin-login {
	width: 10%;
	float:right;
	font-size:15px;
	padding: 10px 20px;
	margin: 8px 0;
	background-color:white;
	color:black;
	border: 1px solid black;
	border-radius: 8px;
}


#register{
	width: 40%;
	padding: 10px 20px;
	margin: 8px 0;
	background-color:white;
	color:black;
	border: 1px solid black;
	border-radius: 8px;
}
#ques-next-btn {
	max-width:100%;
	width:120px;
	font-size:15px;
	padding: 10px 20px;
	margin: 8px 0;
	background-color:white;
	color:black;
	border: 1px solid black;
	border-radius: 8px;
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

<h1 style="text-align:center;">New Quiz</h1>

<form name="" action="questions.php" method="post">



<label><b>Quiz Name</b></label>
<input id="option" type="text" name="qname" required /><br>


<label><b>Total no. of Questions</b></label>
<input id="option" type="text" name="noq" required /><br>



<input id="ques-next-btn" type="submit" value="Create" />


</form>

<footer>

<p id="footer-design">© 2018 Techops. All Rights Reserved | Design by <a href="http://sjec.edu.in/bca.html" target="_blank">BCA</a></p>


</footer>

</body>
</html>