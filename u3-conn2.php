<?php
	$conn=mysqli_connect('localhost','root','');
	mysqli_select_db($conn,'pro');
	
	$sql="create table product
	(pid integer(2),
	pname varchar(20),
	pqty integer(4))";
	
	$retval=mysqli_query($conn,$sql);
	if(!$retval)
	{
		die("could not create table");
	}
	
	echo "Table craeted successfully";
	mysqli_close($conn);
?>