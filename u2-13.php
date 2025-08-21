<?php
	$number=array(50,10,40,20,30);
	
	sort($number);
	echo "Ascending order: <br>";
	
	foreach($number as $temp)
	{
		echo $temp."<br>";
	}
	
	echo "<br>";
	
	rsort($number);
	echo "Descending number: <br>";
	
	foreach($number as $temp)
	{
		echo $temp."<br>";
	}
?>