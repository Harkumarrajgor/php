<?php
	$number=array(10,20,30,40,30,50,20);
	$unique=array_unique($number);
	
	echo "Orignal array:".implode(",",$number)."<br>";
	echo "After removing duplicate:".implode(",",$unique);
?>