<?php

	
	$user="admin";
	$passwd="admin";
	
	$username=$_POST['username'];
	$password=$_POST['password'];
	
	if($user==$username && $passwd==$password)
	{
		require "admin-panel.php";
	}
?>