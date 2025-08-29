<?php
	$student=array(
		array("Rahul",20,"BCA"),
		array("Sneha",21,"B.scIT"),
		array("Amit",19,"BBA")
	);
	
	foreach($student as $temp)
	{
		echo "Name:".$temp[0]."<br>";
		echo "Age:".$temp[1]."<br>";
		echo "Course:".$temp[2]."<br>";
	}
?>