<?php
	$server ='localhost';
	$dbuser = 'root';
	$dbpassword = '';
	$dbname = 'quiz';

	$conn = mysqli_connect($server, $dbuser, $dbpassword,$dbname);

	if(!$conn)
	{
		die("Connection Failed");
	}
	
?>