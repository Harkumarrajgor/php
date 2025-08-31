<?php
	$number=array(5,10,5,20,15,10,5,30);
	$search=5;
	$count=0;
	
	foreach($number as $temp)
	{
		if($temp==$search)
		{
			$count++;
		}
	}
	echo "$search appers $count times in the array.";
?>