<?php
	require 'dbconnect.php';

	$user = mysqli_real_escape_string($conn,$_POST['username']);
	$email = mysqli_real_escape_string($conn,$_POST['email']);
	$mobile = mysqli_real_escape_string($conn,$_POST['mobile']);
	$college = mysqli_real_escape_string($conn,$_POST['collegename']);
	//$id = $_POST["th-id"];
	
	$search = "SELECT * FROM user WHERE mobile='".$mobile."'";
	$result =mysqli_query($conn,$search);

	$count = mysqli_num_rows($result);

	if($count>=1)
	{
		echo "User already exists, Use different mobile number";

		die("Sorry! User exists");
	}
	elseif ($count==0) 
	{


		$query2 = "INSERT INTO user(uname, email, mobile, college) VALUES ('$user','$email','$mobile','$college')";
		
		//print_r($query2);
		//exit();
		$insert_result = mysqli_query($conn,$query2);
	}

?>