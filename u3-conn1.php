<?php
	$conn=mysqli_connect('localhost','root','');
	$sql='create database pro';
	$retval=mysqli_query($conn,$sql);
	
	if(!$retval)
	{
		die("could not create database:");
	}
	
	echo "Database created successfully";
	mysqli_close($conn);
?>