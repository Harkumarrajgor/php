<?php
	$one=array("java","python","php","fluter");
	$search="php";
	
	if(in_array($search,$one))
	{
		echo "$search exist in the array";
	}
	else
	{
		echo "$search does not exist in the array";
	}
?>